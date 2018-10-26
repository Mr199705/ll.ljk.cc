<?php
// +----------------------------------------------------------------------
// | Copyright (c) 2016~2022 http://ljk.cc All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: itkk <it_kk@qq.com>
// +----------------------------------------------------------------------
namespace app\m\validate;

use think\Validate;

class UserValidate extends Validate
{
    protected $rule = [
        ['username', 'unique:user', '管理员已经存在']
    ];

}