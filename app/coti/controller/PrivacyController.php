<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Powerless < wzxaini9@gmail.com>
// +----------------------------------------------------------------------
namespace app\coti\controller;

use cmf\controller\HomeBaseController;
use think\Db;
//首页数据
class PrivacyController extends HomeBaseController
{

    /**
     * 前台用户首页(公开)
     */
    public function index()
    {
        $lang = $this->request->param("lang", null);
        if($lang != null){
            return $this->fetch('index_'.$lang);
        }
        // $userid = cmf_get_current_user_id();
        // $user_data = [];
        // $retdata = [];
        // if($userid != 0) {//游客登录
        //     $user_data = cmf_get_current_user();
        // }
        
        // $etheurl = 'https://api.etherscan.io/api?module=stats&action=ethprice&apikey=YourApiKeyToken';
        // $data = cmf_curl_get($etheurl);
        // // var_dump($data);
        // if($data) {
        //     $ether_data = json_decode($data,true);
        //     //var_dump($ether_data);exit;
        //     //"{"status":"1","message":"OK","result":{"ethbtc":"0.06889","ethbtc_timestamp":"1524208415","ethusd":"574.96","ethusd_timestamp":"1524208415"}}"
        //     //以太币与美元的兑换比例信息
        //     // var_dump($ether_data['result']);
        //     if($ether_data['status']) {
        //         $retdata['ethusd'] = $ether_data['result']['ethusd'];
        //     }
        //     //获取比特币与以太币 与美元的比例
        // } else {
        //     $retdata['ethusd'] = '388.88';
        // }
        
        // $commodity_info = Db::name('commodity')->select();
        // //var_dump($commodity_info);
        // $now = time();
        // // echo date('M d,Y H:i:s');
        // $sale_flag = 0;
        // foreach ($commodity_info as $key => $value) {
        //     if($value['com_starttime'] < $now && $now < $value['com_endtime']) {
        //         $sale_flag = 1;break;
        //     }
        // }
        // // var_dump($sale_flag);


        // $this->assign('sale', $sale_flag);
        // $this->assign('user', $user_data);
        // $this->assign('data', $retdata);

        return $this->fetch();
    }

}
