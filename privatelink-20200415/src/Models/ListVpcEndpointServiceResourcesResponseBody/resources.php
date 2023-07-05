<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServiceResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoAllocatedEnabled;

    /**
     * @description The ID of the endpoint service.
     *
     * @example 192.168.10.23
     *
     * @var string
     */
    public $ip;

    /**
     * @example cn-huhehaote
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 10
     *
     * @var int
     */
    public $relatedDeprecatedEndpointCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $relatedEndpointCount;

    /**
     * @description The ID of the request.
     *
     * @example lb-hp32z1wp5peaoox2q****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $resourceSupportIPv6;

    /**
     * @description The number of replaced connections to the endpoint associated with the endpoint service in smooth migration scenarios.
     *
     * @example slb
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description Indicates whether automatic resource allocation is allowed. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example vsw-hp3uf6045ljdhd5zr****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the region where the service resource is deployed.
     *
     * @example vpc-hp356stwkxg3fn2xe****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the zone where the service resource is deployed.
     *
     * @example cn-huhehaote-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoAllocatedEnabled'           => 'AutoAllocatedEnabled',
        'ip'                             => 'Ip',
        'regionId'                       => 'RegionId',
        'relatedDeprecatedEndpointCount' => 'RelatedDeprecatedEndpointCount',
        'relatedEndpointCount'           => 'RelatedEndpointCount',
        'resourceId'                     => 'ResourceId',
        'resourceSupportIPv6'            => 'ResourceSupportIPv6',
        'resourceType'                   => 'ResourceType',
        'vSwitchId'                      => 'VSwitchId',
        'vpcId'                          => 'VpcId',
        'zoneId'                         => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoAllocatedEnabled) {
            $res['AutoAllocatedEnabled'] = $this->autoAllocatedEnabled;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->relatedDeprecatedEndpointCount) {
            $res['RelatedDeprecatedEndpointCount'] = $this->relatedDeprecatedEndpointCount;
        }
        if (null !== $this->relatedEndpointCount) {
            $res['RelatedEndpointCount'] = $this->relatedEndpointCount;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceSupportIPv6) {
            $res['ResourceSupportIPv6'] = $this->resourceSupportIPv6;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoAllocatedEnabled'])) {
            $model->autoAllocatedEnabled = $map['AutoAllocatedEnabled'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RelatedDeprecatedEndpointCount'])) {
            $model->relatedDeprecatedEndpointCount = $map['RelatedDeprecatedEndpointCount'];
        }
        if (isset($map['RelatedEndpointCount'])) {
            $model->relatedEndpointCount = $map['RelatedEndpointCount'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceSupportIPv6'])) {
            $model->resourceSupportIPv6 = $map['ResourceSupportIPv6'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
