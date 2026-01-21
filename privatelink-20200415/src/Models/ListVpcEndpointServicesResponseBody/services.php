<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServicesResponseBody\services\supportedRegionSet;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServicesResponseBody\services\tags;

class services extends Model
{
    /**
     * @var string
     */
    public $addressIpVersion;

    /**
     * @var bool
     */
    public $autoAcceptEnabled;

    /**
     * @var int
     */
    public $connectBandwidth;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $maxBandwidth;

    /**
     * @var int
     */
    public $minBandwidth;

    /**
     * @var string
     */
    public $payer;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $serviceBusinessStatus;

    /**
     * @var string
     */
    public $serviceDescription;

    /**
     * @var string
     */
    public $serviceDomain;

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
    public $serviceResourceType;

    /**
     * @var string
     */
    public $serviceStatus;

    /**
     * @var bool
     */
    public $serviceSupportIPv6;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var supportedRegionSet[]
     */
    public $supportedRegionSet;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var bool
     */
    public $zoneAffinityEnabled;
    protected $_name = [
        'addressIpVersion' => 'AddressIpVersion',
        'autoAcceptEnabled' => 'AutoAcceptEnabled',
        'connectBandwidth' => 'ConnectBandwidth',
        'createTime' => 'CreateTime',
        'maxBandwidth' => 'MaxBandwidth',
        'minBandwidth' => 'MinBandwidth',
        'payer' => 'Payer',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'serviceBusinessStatus' => 'ServiceBusinessStatus',
        'serviceDescription' => 'ServiceDescription',
        'serviceDomain' => 'ServiceDomain',
        'serviceId' => 'ServiceId',
        'serviceName' => 'ServiceName',
        'serviceResourceType' => 'ServiceResourceType',
        'serviceStatus' => 'ServiceStatus',
        'serviceSupportIPv6' => 'ServiceSupportIPv6',
        'serviceType' => 'ServiceType',
        'supportedRegionSet' => 'SupportedRegionSet',
        'tags' => 'Tags',
        'zoneAffinityEnabled' => 'ZoneAffinityEnabled',
    ];

    public function validate()
    {
        if (\is_array($this->supportedRegionSet)) {
            Model::validateArray($this->supportedRegionSet);
        }
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

        if (null !== $this->autoAcceptEnabled) {
            $res['AutoAcceptEnabled'] = $this->autoAcceptEnabled;
        }

        if (null !== $this->connectBandwidth) {
            $res['ConnectBandwidth'] = $this->connectBandwidth;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->maxBandwidth) {
            $res['MaxBandwidth'] = $this->maxBandwidth;
        }

        if (null !== $this->minBandwidth) {
            $res['MinBandwidth'] = $this->minBandwidth;
        }

        if (null !== $this->payer) {
            $res['Payer'] = $this->payer;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->serviceBusinessStatus) {
            $res['ServiceBusinessStatus'] = $this->serviceBusinessStatus;
        }

        if (null !== $this->serviceDescription) {
            $res['ServiceDescription'] = $this->serviceDescription;
        }

        if (null !== $this->serviceDomain) {
            $res['ServiceDomain'] = $this->serviceDomain;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->serviceResourceType) {
            $res['ServiceResourceType'] = $this->serviceResourceType;
        }

        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }

        if (null !== $this->serviceSupportIPv6) {
            $res['ServiceSupportIPv6'] = $this->serviceSupportIPv6;
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->supportedRegionSet) {
            if (\is_array($this->supportedRegionSet)) {
                $res['SupportedRegionSet'] = [];
                $n1 = 0;
                foreach ($this->supportedRegionSet as $item1) {
                    $res['SupportedRegionSet'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['AutoAcceptEnabled'])) {
            $model->autoAcceptEnabled = $map['AutoAcceptEnabled'];
        }

        if (isset($map['ConnectBandwidth'])) {
            $model->connectBandwidth = $map['ConnectBandwidth'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['MaxBandwidth'])) {
            $model->maxBandwidth = $map['MaxBandwidth'];
        }

        if (isset($map['MinBandwidth'])) {
            $model->minBandwidth = $map['MinBandwidth'];
        }

        if (isset($map['Payer'])) {
            $model->payer = $map['Payer'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ServiceBusinessStatus'])) {
            $model->serviceBusinessStatus = $map['ServiceBusinessStatus'];
        }

        if (isset($map['ServiceDescription'])) {
            $model->serviceDescription = $map['ServiceDescription'];
        }

        if (isset($map['ServiceDomain'])) {
            $model->serviceDomain = $map['ServiceDomain'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['ServiceResourceType'])) {
            $model->serviceResourceType = $map['ServiceResourceType'];
        }

        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }

        if (isset($map['ServiceSupportIPv6'])) {
            $model->serviceSupportIPv6 = $map['ServiceSupportIPv6'];
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['SupportedRegionSet'])) {
            if (!empty($map['SupportedRegionSet'])) {
                $model->supportedRegionSet = [];
                $n1 = 0;
                foreach ($map['SupportedRegionSet'] as $item1) {
                    $model->supportedRegionSet[$n1] = supportedRegionSet::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['ZoneAffinityEnabled'])) {
            $model->zoneAffinityEnabled = $map['ZoneAffinityEnabled'];
        }

        return $model;
    }
}
