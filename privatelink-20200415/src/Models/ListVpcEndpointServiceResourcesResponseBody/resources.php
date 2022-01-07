<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServiceResourcesResponseBody;

use AlibabaCloud\Tea\Model;

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
        'autoAllocatedEnabled'           => 'AutoAllocatedEnabled',
        'ip'                             => 'Ip',
        'regionId'                       => 'RegionId',
        'relatedDeprecatedEndpointCount' => 'RelatedDeprecatedEndpointCount',
        'relatedEndpointCount'           => 'RelatedEndpointCount',
        'resourceId'                     => 'ResourceId',
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
