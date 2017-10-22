<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/19 0019
 * Time: 15:50
 */

namespace App\Http\Controllers;


use App\Users;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function info()
    {
        //return '123';
        //return Users::getName();
        /*return view('user/user',[
            'name'=>'黄泉',
        ]);*/

        $data = DB::select('select * from onethink_ucenter_member');
        dd($data);
    }

    public function query()
    {

        //插入
        /*$data = DB::table('ucenter_setting')->insert
        (
            ['type' => '10','value' => 'qqq']
        );*/
        //更新
        //$data = DB::table('ucenter_setting')->where('id',1)->update(['value' => 'BBB']);
        //$data = DB::table('ucenter_setting')->where('id',1)->increment('type',1,['value' => 'pppp']);
        //$data = DB::table('ucenter_setting')->where('id',1)->decrement('type',1,['value' => 'kkkk']);
        //删除
        //$data = DB::table('ucenter_setting')->truncate();  //清空表
        //$data = DB::table('ucenter_setting')->where('id','>',5)->delete();  //删除数据
        //$data = DB::table('ucenter_setting')->orderBy('id','desc')->first();  //查询第一条数据

        //$data = DB::table('ucenter_setting')->pluck('type','id');
        //$data = DB::table('ucenter_setting')->lists('type','id');  //查询某个指定字段且可以把某个字段作为主键

        //$data = DB::table('ucenter_setting')->select('type','id')->get(); //查询需要的字段

        /*$data = DB::table('ucenter_setting')->chunk('2',function($list){
            $this->pre($list);  //不能用dd方法
            return false; //需要断掉时打开
        });*/ //指定每次查询条数直到查完

        $count = DB::table('ucenter_setting')->count('type'); //总行数
        $max = DB::table('ucenter_setting')->max('type'); //最大数
        $min = DB::table('ucenter_setting')->min('type'); //最小数
        $avg = DB::table('ucenter_setting')->avg('type'); //平均数
        $sum = DB::table('ucenter_setting')->sum('type'); //总和

        dd($sum);
    }

    public function orm()
    {
        $data = Users::all();
        $data = Users::find(1);
        dd($data);
    }

    function pre($list)
    {
        echo '<pre>';
        var_dump($list);
        echo '</pre>';
    }

    public function request(Request $request)
    {
        echo $request->input('name'); //获取指定键
        echo $request->has('name'); //是否存在
        echo $request->all(); //获取全部
        $request->isMethod('get'); //判断请求类型get or post
        $request->ajax(); //判断ajax
        $request->url();//获取当前url
    }
}