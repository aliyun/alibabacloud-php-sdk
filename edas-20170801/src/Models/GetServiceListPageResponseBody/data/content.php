<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceListPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example efbda488-7b33-432f-****-36530047****
     *
     * @var string
     */
    public $edasAppId;

    /**
     * @description The name of the application.
     *
     * @example k8s-lq-cartservice
     *
     * @var string
     */
    public $edasAppName;

    /**
     * @description The service group.
     *
     * @example DUBBO
     *
     * @var string
     */
    public $group;

    /**
     * @description The number of instances.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceNum;

    /**
     * @description The type of the service registry.
     *
     * @example xx
     *
     * @var string
     */
    public $registerType;

    /**
     * @description The ID of the service.
     *
     * @example xx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The name of the service.
     *
     * @example com.alibabacloud.hipstershop.CartService
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The version number.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'edasAppId'    => 'EdasAppId',
        'edasAppName'  => 'EdasAppName',
        'group'        => 'Group',
        'instanceNum'  => 'InstanceNum',
        'registerType' => 'RegisterType',
        'serviceId'    => 'ServiceId',
        'serviceName'  => 'ServiceName',
        'version'      => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edasAppId) {
            $res['EdasAppId'] = $this->edasAppId;
        }
        if (null !== $this->edasAppName) {
            $res['EdasAppName'] = $this->edasAppName;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->instanceNum) {
            $res['InstanceNum'] = $this->instanceNum;
        }
        if (null !== $this->registerType) {
            $res['RegisterType'] = $this->registerType;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
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
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EdasAppId'])) {
            $model->edasAppId = $map['EdasAppId'];
        }
        if (isset($map['EdasAppName'])) {
            $model->edasAppName = $map['EdasAppName'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['InstanceNum'])) {
            $model->instanceNum = $map['InstanceNum'];
        }
        if (isset($map['RegisterType'])) {
            $model->registerType = $map['RegisterType'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
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
