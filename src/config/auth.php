<?php
/**
 * Created by wenhainan.
 * User: wenhainan
 * QQ群: 606645328
 * 官网: http://www.waytomilky.com/  
 * Date: 2020/3/02
 * Time: 22:50
 */
return[
    'auth_on'           => 1, // 权限开关
    'auth_type'         => 1, // 认证方式，1为实时认证；2为登录认证。
    'auth_group'        => 'think_auth_group', // 用户组数据不带前缀表名
    'auth_group_access' => 'think_auth_group_access', // 用户-用户组关系不带前缀表名
    'auth_rule'         => 'think_auth_rule', // 权限规则不带前缀表名
    'auth_user'         => 'user', // 用户信息表不带前缀表名,主键自增字段为id
];