<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceListPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $edasAppName;

    /**
     * @var int
     */
    public $instanceNum;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $edasAppId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $registerType;

    /**
     * @var string
     */
    public $group;
    protected $_name = [
        'edasAppName'  => 'EdasAppName',
        'instanceNum'  => 'InstanceNum',
        'version'      => 'Version',
        'serviceId'    => 'ServiceId',
        'edasAppId'    => 'EdasAppId',
        'serviceName'  => 'ServiceName',
        'registerType' => 'RegisterType',
        'group'        => 'Group',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edasAppName) {
            $res['EdasAppName'] = $this->edasAppName;
        }
        if (null !== $this->instanceNum) {
            $res['InstanceNum'] = $this->instanceNum;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->edasAppId) {
            $res['EdasAppId'] = $this->edasAppId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->registerType) {
            $res['RegisterType'] = $this->registerType;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EdasAppName'])) {
            $model->edasAppName = $map['EdasAppName'];
        }
        if (isset($map['InstanceNum'])) {
            $model->instanceNum = $map['InstanceNum'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['EdasAppId'])) {
            $model->edasAppId = $map['EdasAppId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['RegisterType'])) {
            $model->registerType = $map['RegisterType'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        return $model;
    }
}
