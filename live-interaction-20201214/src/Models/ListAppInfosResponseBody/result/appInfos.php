<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListAppInfosResponseBody\result;

use AlibabaCloud\Tea\Model;

class appInfos extends Model
{
    /**
     * @description 应用Id
     *
     * @var string
     */
    public $appId;

    /**
     * @description 应用名
     *
     * @var string
     */
    public $appName;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 应用状态
     *
     * @var int
     */
    public $appStatus;

    /**
     * @description 产品版本
     *
     * @var string
     */
    public $prodVersion;

    /**
     * @description 实例Id
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'appId'       => 'AppId',
        'appName'     => 'AppName',
        'createTime'  => 'CreateTime',
        'appStatus'   => 'AppStatus',
        'prodVersion' => 'ProdVersion',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->appStatus) {
            $res['AppStatus'] = $this->appStatus;
        }
        if (null !== $this->prodVersion) {
            $res['ProdVersion'] = $this->prodVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AppStatus'])) {
            $model->appStatus = $map['AppStatus'];
        }
        if (isset($map['ProdVersion'])) {
            $model->prodVersion = $map['ProdVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
