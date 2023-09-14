<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class Application extends Model
{
    /**
     * @description 应用名称。从EMR控制台集群创建页面可查看到指定发行版的应用名称列表。
     *
     * @example HDFS
     *
     * @var string
     */
    public $applicationName;
    protected $_name = [
        'applicationName' => 'ApplicationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Application
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        return $model;
    }
}
