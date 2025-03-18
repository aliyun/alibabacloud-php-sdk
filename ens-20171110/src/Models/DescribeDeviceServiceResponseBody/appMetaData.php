<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody;

use AlibabaCloud\Tea\Model;

class appMetaData extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 97a32f2a-aa2c-436a-b19c-05b20d258618
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example iotx-api-admin
     *
     * @var string
     */
    public $appName;

    /**
     * @description The stable version number of the application.
     *
     * @example v1
     *
     * @var string
     */
    public $appStableVersion;

    /**
     * @description The type of the application. The value is of the enumeration type. Valid values:
     *
     *   Common
     *   Scheduler
     *
     * @example Common
     *
     * @var string
     */
    public $appType;

    /**
     * @description The name of the application cluster.
     *
     * @example poc
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The time when the application was created.
     *
     * @example 2022-03-03T03:42:11
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the application.
     *
     * @example test application
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appStableVersion' => 'AppStableVersion',
        'appType' => 'AppType',
        'clusterName' => 'ClusterName',
        'createTime' => 'CreateTime',
        'description' => 'Description',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appStableVersion) {
            $res['AppStableVersion'] = $this->appStableVersion;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appMetaData
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
        if (isset($map['AppStableVersion'])) {
            $model->appStableVersion = $map['AppStableVersion'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
