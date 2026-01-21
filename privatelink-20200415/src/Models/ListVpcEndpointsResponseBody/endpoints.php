<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointsResponseBody\endpoints\tags;

class endpoints extends Model
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
    public $endpointType;

    /**
     * @var string
     */
    public $policyDocument;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $resourceOwner;

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
     * @var tags[]
     */
    public $tags;

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
        'endpointType' => 'EndpointType',
        'policyDocument' => 'PolicyDocument',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwner' => 'ResourceOwner',
        'serviceId' => 'ServiceId',
        'serviceName' => 'ServiceName',
        'serviceRegionId' => 'ServiceRegionId',
        'tags' => 'Tags',
        'vpcId' => 'VpcId',
        'zoneAffinityEnabled' => 'ZoneAffinityEnabled',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
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

        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }

        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwner) {
            $res['ResourceOwner'] = $this->resourceOwner;
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }

        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwner'])) {
            $model->resourceOwner = $map['ResourceOwner'];
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

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
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
