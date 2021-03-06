<?php
return array(
	//'配置项'=>'配置值'
    //Auth配置
    'AUTH_CONFIG' => array(
        // 用户组数据表名
        //'AUTH_GROUP' => 'tp_group',
        // 用户-用户组关系表
        //'AUTH_GROUP_ACCESS' => 'tp_group_access',
        // 权限规则表
        //'AUTH_RULE' => 'tp_rule',
        // 用户信息表
        'AUTH_USER' => 'user'
    ),
    /* 数据库设置 */
    'DB_TYPE'                => 'mysql', // 数据库类型
    'DB_HOST'                => '127.0.0.1', // 服务器地址
    'DB_NAME'                => 'think_web', // 数据库名
    'DB_USER'                => 'root', // 用户名
    'DB_PWD'                 => 'fulisiwo', // 密码
    'DB_PORT'                => '3306', // 端口
    'DB_PREFIX'              => 'think_', // 数据库表前缀
    'DB_PARAMS'              => array(), // 数据库连接参数
    'DB_DEBUG'               => true, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'        => true, // 启用字段缓存
    'DB_CHARSET'             => 'utf8', // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'         => 0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'         => false, // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'          => 1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'            => '', // 指定从服务器序号

    //不区分大小写
    // 'URL_CASE_INSENSITIVE' =>true
    'DB_SQL_BUILD_CACHE' => true,
    'DB_SQL_BUILD_LENGTH' => 20,// SQL缓存的队列长度
);