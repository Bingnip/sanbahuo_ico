<?php
namespace app\ico\validate;

use think\Validate;

class UpdatedetailinfoValidate extends Validate
{
    protected $rule = [
        'firstname' => 'require',
        'lastname'  => 'require',
        'address'  => 'require',
        'country'  => 'require',
        'city'  => 'require',
        'state'  => 'require',
        'zipcode'  => 'require',
        //'code'  => 'require',
        'phone'  => 'require',
        'eth_address' => 'require',
    ];
    protected $message = [
        'firstname.require'     => 'firstname不能为空',
        'lastname.require'       => '用户名已存在',
        'address.require'     => '地址不能为空',
        'country.require'    => '国家不能为空',
        'city.require'    => '城市不能为空',
        'state.require'    => '省份不能为空',
        'zipcode.require'    => '邮编不能为空',
        //'code.require'    => '邮箱不能为空',
        'phone.require'    => '手机不能为空',
        'eth_address.require'    => '钱包地址不能为空',

        // 'user_email.email'      => '邮箱不正确',
        // 'user_email.require'     => '邮箱已经存在',
    ];
}


?>