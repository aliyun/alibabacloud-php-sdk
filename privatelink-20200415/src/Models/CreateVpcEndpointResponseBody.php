<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Dara\Model;

class CreateVpcEndpointResponseBody extends Model
{
    /**
     * @var string
     */
    public $addressIpVersion;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $crossRegionBandwidth;

    /**
     * @var string
     */
    public $endpointBusinessStatus;

    /**
     * @var string
     */
    public $endpointDescription;

    /**
     * @var string
     */
    public $endpointDomain;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $endpointName;

    /**
     * @var string
     */
    public $endpointStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $serviceRegionId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var bool
     */
    public $zoneAffinityEnabled;
    protected $_name = [
        'addressIpVersion' => 'AddressIpVersion',
        'bandwidth' => 'Bandwidth',
        'connectionStatus' => 'ConnectionStatus',
        'createTime' => 'CreateTime',
        'crossRegionBandwidth' => 'CrossRegionBandwidth',
        'endpointBusinessStatus' => 'EndpointBusinessStatus',
        'endpointDescription' => 'EndpointDescription',
        'endpointDomain' => 'EndpointDomain',
        'endpointId' => 'EndpointId',
        'endpointName' => 'EndpointName',
        'endpointStatus' => 'EndpointStatus',
        'requestId' => 'RequestId',
        'serviceId' => 'ServiceId',
        'serviceName' => 'ServiceName',
        'serviceRegionId' => 'ServiceRegionId',
        'vpcId' => 'VpcId',
        'zoneAffinityEnabled' => 'ZoneAffinityEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressIpVersion) {
            $res['AddressIpVersion'] = $this->addressIpVersion;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->crossRegionBandwidth) {
            $res['CrossRegionBandwidth'] = $this->crossRegionBandwidth;
        }

        if (null !== $this->endpointBusinessStatus) {
            $res['EndpointBusinessStatus'] = $this->endpointBusinessStatus;
        }

        if (null !== $this->endpointDescription) {
            $res['EndpointDescription'] = $this->endpointDescription;
        }

        if (null !== $this->endpointDomain) {
            $res['EndpointDomain'] = $this->endpointDomain;
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }

        if (null !== $this->endpointStatus) {
            $res['EndpointStatus'] = $this->endpointStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneAffinityEnabled) {
            $res['ZoneAffinityEnabled'] = $this->zoneAffinityEnabled;
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
        if (isset($map['AddressIpVersion'])) {
            $model->addressIpVersion = $map['AddressIpVersion'];
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CrossRegionBandwidth'])) {
            $model->crossRegionBandwidth = $map['CrossRegionBandwidth'];
        }

        if (isset($map['EndpointBusinessStatus'])) {
            $model->endpointBusinessStatus = $map['EndpointBusinessStatus'];
        }

        if (isset($map['EndpointDescription'])) {
            $model->endpointDescription = $map['EndpointDescription'];
        }

        if (isset($map['EndpointDomain'])) {
            $model->endpointDomain = $map['EndpointDomain'];
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }

        if (isset($map['EndpointStatus'])) {
            $model->endpointStatus = $map['EndpointStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneAffinityEnabled'])) {
            $model->zoneAffinityEnabled = $map['ZoneAffinityEnabled'];
        }

        return $model;
    }
}
