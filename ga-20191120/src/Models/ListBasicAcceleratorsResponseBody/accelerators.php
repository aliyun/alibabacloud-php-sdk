<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAcceleratorsResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAcceleratorsResponseBody\accelerators\basicBandwidthPackage;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAcceleratorsResponseBody\accelerators\crossDomainBandwidthPackage;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAcceleratorsResponseBody\accelerators\tags;
use AlibabaCloud\Tea\Model;

class accelerators extends Model
{
    /**
     * @description The ID of the basic GA instance.
     *
     * @example ga-bp17frjjh0udz4qz****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @example BandwidthPackage
     *
     * @var string
     */
    public $bandwidthBillingType;

    /**
     * @description The details about the basic bandwidth plan that is associated with the basic GA instance.
     *
     * @var basicBandwidthPackage
     */
    public $basicBandwidthPackage;

    /**
     * @description The ID of the endpoint group that is associated with the basic GA instance.
     *
     * @example epg-bp1dmlohjjz4kqaun****
     *
     * @var string
     */
    public $basicEndpointGroupId;

    /**
     * @description The ID of the acceleration region.
     *
     * @example ips-bp11ilwqjdkjeg9r7****
     *
     * @var string
     */
    public $basicIpSetId;

    /**
     * @description The timestamp that indicates when the basic GA instance was created.
     *
     * @example 1637734547
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The details about the cross-region acceleration bandwidth plan that is associated with the GA instance.
     *
     * This array is returned only for GA instances that are created on the International site (alibabacloud.com).
     * @var crossDomainBandwidthPackage
     */
    public $crossDomainBandwidthPackage;

    /**
     * @description The description of the basic GA instance.
     *
     * @example BasicAccelerator
     *
     * @var string
     */
    public $description;

    /**
     * @description The timestamp that indicates when the basic GA instance expires.
     *
     * @example 1640326547
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @description The billing method of the basic GA instance. Only **PREPAY** is returned, which indicates the subscription billing method.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The name of the basic GA instance.
     *
     * @example BasicAccelerator
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region where the basic GA instance is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-aekzrnd67gq****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the basic GA instance. Valid values:
     *
     *   **init**: initializing
     *   **active**: available
     *   **configuring**: being configured
     *   **binding**: being associated
     *   **unbinding**: being disassociated
     *   **Deleting**: being deleted
     *   **finacialLocked**: locked due to overdue payments
     *
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @description Ignore this parameter.
     *
     * @example None
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acceleratorId'               => 'AcceleratorId',
        'bandwidthBillingType'        => 'BandwidthBillingType',
        'basicBandwidthPackage'       => 'BasicBandwidthPackage',
        'basicEndpointGroupId'        => 'BasicEndpointGroupId',
        'basicIpSetId'                => 'BasicIpSetId',
        'createTime'                  => 'CreateTime',
        'crossDomainBandwidthPackage' => 'CrossDomainBandwidthPackage',
        'description'                 => 'Description',
        'expiredTime'                 => 'ExpiredTime',
        'instanceChargeType'          => 'InstanceChargeType',
        'name'                        => 'Name',
        'regionId'                    => 'RegionId',
        'resourceGroupId'             => 'ResourceGroupId',
        'state'                       => 'State',
        'tags'                        => 'Tags',
        'type'                        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->bandwidthBillingType) {
            $res['BandwidthBillingType'] = $this->bandwidthBillingType;
        }
        if (null !== $this->basicBandwidthPackage) {
            $res['BasicBandwidthPackage'] = null !== $this->basicBandwidthPackage ? $this->basicBandwidthPackage->toMap() : null;
        }
        if (null !== $this->basicEndpointGroupId) {
            $res['BasicEndpointGroupId'] = $this->basicEndpointGroupId;
        }
        if (null !== $this->basicIpSetId) {
            $res['BasicIpSetId'] = $this->basicIpSetId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->crossDomainBandwidthPackage) {
            $res['CrossDomainBandwidthPackage'] = null !== $this->crossDomainBandwidthPackage ? $this->crossDomainBandwidthPackage->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accelerators
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['BandwidthBillingType'])) {
            $model->bandwidthBillingType = $map['BandwidthBillingType'];
        }
        if (isset($map['BasicBandwidthPackage'])) {
            $model->basicBandwidthPackage = basicBandwidthPackage::fromMap($map['BasicBandwidthPackage']);
        }
        if (isset($map['BasicEndpointGroupId'])) {
            $model->basicEndpointGroupId = $map['BasicEndpointGroupId'];
        }
        if (isset($map['BasicIpSetId'])) {
            $model->basicIpSetId = $map['BasicIpSetId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CrossDomainBandwidthPackage'])) {
            $model->crossDomainBandwidthPackage = crossDomainBandwidthPackage::fromMap($map['CrossDomainBandwidthPackage']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
