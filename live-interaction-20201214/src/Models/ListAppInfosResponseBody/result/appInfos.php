<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListAppInfosResponseBody\result;

use AlibabaCloud\Tea\Model;

class appInfos extends Model
{
    /**
     * @example aaa111
     *
     * @var string
     */
    public $appId;

    /**
     * @example test name
     *
     * @var string
     */
    public $appName;

    /**
     * @example 1
     *
     * @var int
     */
    public $appStatus;

    /**
     * @example 2020-10-10 22:24:09
     *
     * @var string
     */
    public $createTime;

    /**
     * @example live-producer-public-cn_23343
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example BasicVersion
     *
     * @var string
     */
    public $prodVersion;
    protected $_name = [
        'appId'       => 'AppId',
        'appName'     => 'AppName',
        'appStatus'   => 'AppStatus',
        'createTime'  => 'CreateTime',
        'instanceId'  => 'InstanceId',
        'prodVersion' => 'ProdVersion',
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
        if (null !== $this->appStatus) {
            $res['AppStatus'] = $this->appStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->prodVersion) {
            $res['ProdVersion'] = $this->prodVersion;
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
        if (isset($map['AppStatus'])) {
            $model->appStatus = $map['AppStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProdVersion'])) {
            $model->prodVersion = $map['ProdVersion'];
        }

        return $model;
    }
}
