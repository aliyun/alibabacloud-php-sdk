<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The application ID.
     *
     * @example dez4xxxxx@f3f75ed8ffxxxxx
     *
     * @var string
     */
    public $appId;

    /**
     * @description The application name.
     *
     * @example example-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The time when the service was last updated.
     *
     * @example 123456
     *
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @description The group to which the service belongs.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $group;

    /**
     * @description The number of service nodes.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceNum;

    /**
     * @description The service name.
     *
     * @example sc-A
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The service version.
     *
     * @example 1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'appId'         => 'AppId',
        'appName'       => 'AppName',
        'gmtModifyTime' => 'GmtModifyTime',
        'group'         => 'Group',
        'instanceNum'   => 'InstanceNum',
        'serviceName'   => 'ServiceName',
        'version'       => 'Version',
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
        if (null !== $this->gmtModifyTime) {
            $res['GmtModifyTime'] = $this->gmtModifyTime;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->instanceNum) {
            $res['InstanceNum'] = $this->instanceNum;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
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
        if (isset($map['GmtModifyTime'])) {
            $model->gmtModifyTime = $map['GmtModifyTime'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['InstanceNum'])) {
            $model->instanceNum = $map['InstanceNum'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
