<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeployMentController extends Controller
{
    //自动更新
    public function deploy(Request $request){
        $commands=['cd D:/UPUPW/vhosts/vx.haoall.com','git pull origin master'];
        $signature=$request->header('X-Hub-Signature');
        $payload=file_get_contents('php://input');
        if ($this->isFromGithub($payload,$signature)){
            foreach ($commands as $command) {
                shell_exec($command);
            }
            http_response_code(200);
        }else{
            abort(403);
        }
    }

    private function isFromGithub($payload,$signature)
    {
        return 'sha1='.hash_hmac('sha1',$payload,env('GITHUB_DEPLOY_TOKEN'),false)==$signature;
    }

}
