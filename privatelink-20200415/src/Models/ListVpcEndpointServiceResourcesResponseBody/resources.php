<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServiceResourcesResponseBody;

use AlibabaCloud\Dara\Model;

class resources extends Model
{
    /**
     * @var bool
     */
    public $autoAllocatedEnabled;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $relatedDeprecatedEndpointCount;

    /**
     * @var int
     */
    public $relatedEndpointCount;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var bool
     */
    public $resourceSupportIPv6;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoAllocatedEnabled' => 'AutoAllocatedEnabled',
        'ip' => 'Ip',
        'regionId' => 'RegionId',
        'relatedDeprecatedEndpointCount' => 'RelatedDeprecatedEndpointCount',
        'relatedEndpointCount' => 'RelatedEndpointCount',
        'resourceId' => 'ResourceId',
        'resourceSupportIPv6' => 'ResourceSupportIPv6',
        'resourceType' => 'ResourceType',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
