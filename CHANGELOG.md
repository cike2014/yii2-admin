Yii2-admin extension Change Log
===============================

1.2.1 2019-05-21
----------------

- bug: meTables.js 文件搜索表单 input 回车事件判断错误问题
- style: 打开标签关闭按钮样式调整  

1.2.0 2019-05-19
----------------

- Change: 不在支持表达式查询的方式
    - remove: 删除控制器的 getDefaultWhere 方法
    - change: 视图中查询字段去掉表达式
    - change: 控制器上传文件之后处理方法改动
        ```php
        /**
         * @params string              $strFilePath   上传好的文件保存路径
         * @params string              $strFiled      上传文件字段名称
         * @params \yii\web\UploadFile $strObject     上传文件处理类
         * @return string 需要返回文件保存路径
         */
        public function afterUpload($strFilePath, $strField, $strObject)
        {
              return $strFilePath;
        }
    
        ```
    - add: 控制器添加 where 方法处理前端查询字段和查询方式
        
        ```php
              
            /**
             * 定义查询处理
             * @params array $params 请求的参数，可以不用接收
             * @return array 必须要返回一个数组
             */
            public function where()
            {
                return [
                    // where 这个是定义默认的查询条件,注意，需要是一个二维数组
                    'where' => [['=', 'type', 2]],
                    
                    // 之前的方式，还是支持的
                    'id' => '=',
                    'status' => '=',
                    
                    // 新的数组方式定义，
                    // 第一个元素表示：对应的字段，
                    // 第二个元素表示：处理的方式，同样支持字符串、数组、匿名函数处理方式
                    [['id', 'status'], '='],
                ];
            }
          
            ```
    
- Change: meTable 的查询 input 添加回车查询数据

1.1.5   2019-05-10
------------------

- bug: 修复导出数据，查询条件无效问题   