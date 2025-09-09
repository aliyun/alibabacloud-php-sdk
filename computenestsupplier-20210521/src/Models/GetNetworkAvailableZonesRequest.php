<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class GetNetworkAvailableZonesRequest extends Model
{
    /**
     * @var bool
     */
    public $isPoc;

    /**
     * @var string
     */
    public $networkRegionId;

    /**
     * @var string
     */
    public $privateVpcConnectionMode;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceInstanceEndpointServiceType;

    /**
     * @var string
     */
    public $serviceRegionId;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'isPoc' => 'IsPoc',
        'networkRegionId' => 'NetworkRegionId',
        'privateVpcConnectionMode' => 'PrivateVpcConnectionMode',
        'serviceId' => 'ServiceId',
        'serviceInstanceEndpointServiceType' => 'ServiceInstanceEndpointServiceType',
        'serviceRegionId' => 'ServiceRegionId',
        'serviceVersion' => 'ServiceVersion',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isPoc) {
            $res['IsPoc'] = $this->isPoc;
        }

        if (null !== $this->networkRegionId) {
            $res['NetworkRegionId'] = $this->networkRegionId;
        }

        if (null !== $this->privateVpcConnectionMode) {
            $res['PrivateVpcConnectionMode'] = $this->privateVpcConnectionMode;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceInstanceEndpointServiceType) {
            $res['ServiceInstanceEndpointServiceType'] = $this->serviceInstanceEndpointServiceType;
        }

        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }

        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['IsPoc'])) {
            $model->isPoc = $map['IsPoc'];
        }

        if (isset($map['NetworkRegionId'])) {
            $model->networkRegionId = $map['NetworkRegionId'];
        }

        if (isset($map['PrivateVpcConnectionMode'])) {
            $model->privateVpcConnectionMode = $map['PrivateVpcConnectionMode'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceInstanceEndpointServiceType'])) {
            $model->serviceInstanceEndpointServiceType = $map['ServiceInstanceEndpointServiceType'];
        }

        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }

        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
