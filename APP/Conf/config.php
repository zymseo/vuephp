<?php

    return array(
    	//配置数据库
    	'DB_HOST' => 'localhost',
        'DB_NAME' => 'tour',
        'DB_USER' => 'root',
        'DB_PWD' => '',
        'DB_PREFIX' => 'tour_',
        //独立分组配置
        'APP_GROUP_MODE' => 1,
        'APP_GROUP_PATH' => 'Modules',
        //项目分组
        'APP_GROUP_LIST' => 'Admin,Index',
        'DEFAULT_GROUP' => 'Index',
        //配置自定义路径
        'TMPL_PARSE_STRING' => array(
            '__PUBLIC__' => __ROOT__.'/'.APP_NAME.'/Public'
        ),
        //浏览器上显示sql调试信息和控制台信息：
        'SHOW_PAGE_TRACE'=>false,
        //url路径
        'URL_MODEL' => 1,
        //session存储
        'SESSION_TYPE' => 'Db',
        //指定超级管理员用户名称：
        'RBAC_SUPERADMIN'=>'admin',
        //超级管理员识别
        'ADMIN_AUTH_KEY'=>'superadmin'
    );
