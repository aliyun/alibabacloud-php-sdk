<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListPageResponseBody\data;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var string
     */
    public $gmtModifyTime;
    /**
     * @var string
     */
    public $group;
    /**
     * @var int
     */
    public $instanceNum;
    /**
     * @var string
     */
    public $serviceName;
    /**
     * @var string
     */
    public $serviceType;
    /**
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
        'serviceType'   => 'ServiceType',
        'version'       => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
