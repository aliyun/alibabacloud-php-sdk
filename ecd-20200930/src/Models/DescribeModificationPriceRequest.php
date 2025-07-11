<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeModificationPriceRequest\resourceSpecs;
use AlibabaCloud\Tea\Model;

class DescribeModificationPriceRequest extends Model
{
    /**
     * @description The maximum public bandwidth. Unit: Mbit/s.
     *
     * >  Valid values when PayByTraffic is set to PayByBandwidth: 10 to 1000.
     *
     * @example 20
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The ID of either the monthly subscription cloud computer with unlimited hours or the premium bandwidth plan.
     *
     * @example ecd-0gfv2z3sf95zvt****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The specifications.
     *
     *   Valid values when you set `ResourceType` to `Desktop`:
     *
     *   ecd.basic.small
     *   ecd.basic.large
     *   ecd.advanced.large
     *   ecd.advanced.xlarge
     *   ecd.performance.2xlarge
     *   ecd.graphics.xlarge
     *   ecd.graphics.2xlarge
     *   ecd.advanced.xlarge_s8d2
     *   ecd.advanced.xlarge_s8d7
     *   ecd.graphics.1g72c
     *   eds.general.2c2g
     *   eds.general.2c4g
     *   eds.general.2c8g
     *   eds.general.4c8g
     *   eds.general.4c16g
     *   eds.general.8c16g
     *   eds.general.8c32g
     *   eds.general.16c32g
     *
     *   You can skip this parameter if `ResourceType` is set to `NetworkPackage`.
     *
     * @example eds.enterprise_office.8c16g
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the list of regions where Elastic Desktop Service (EDS) Enterprise is available.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resellerOwnerUid;

    /**
     * @var resourceSpecs[]
     */
    public $resourceSpecs;

    /**
     * @description The resource type. The required parameters depend on the resource type.
     *
     *   When `ResourceType` is set to `Desktop`, the required parameters are `InstanceType`, `RootDiskSizeGib`, and `UserDiskSizeGib`.
     *   When `ResourceType` is set to `NetworkPackage`, the required parameter is `Bandwidth`.
     *
     * Valid values:
     *
     *   Desktop (default): cloud computers.
     *   NetworkPackage: premium bandwidth plans.
     *
     * @example Desktop
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The size of the system disk. Unit: GiB.
     *
     * @example 80
     *
     * @var int
     */
    public $rootDiskSizeGib;

    /**
     * @description The size of the data disk. Unit: GiB.
     *
     * @example 50
     *
     * @var int
     */
    public $userDiskSizeGib;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'regionId' => 'RegionId',
        'resellerOwnerUid' => 'ResellerOwnerUid',
        'resourceSpecs' => 'ResourceSpecs',
        'resourceType' => 'ResourceType',
        'rootDiskSizeGib' => 'RootDiskSizeGib',
        'userDiskSizeGib' => 'UserDiskSizeGib',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resellerOwnerUid) {
            $res['ResellerOwnerUid'] = $this->resellerOwnerUid;
        }
        if (null !== $this->resourceSpecs) {
            $res['ResourceSpecs'] = [];
            if (null !== $this->resourceSpecs && \is_array($this->resourceSpecs)) {
                $n = 0;
                foreach ($this->resourceSpecs as $item) {
                    $res['ResourceSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->rootDiskSizeGib) {
            $res['RootDiskSizeGib'] = $this->rootDiskSizeGib;
        }
        if (null !== $this->userDiskSizeGib) {
            $res['UserDiskSizeGib'] = $this->userDiskSizeGib;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeModificationPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResellerOwnerUid'])) {
            $model->resellerOwnerUid = $map['ResellerOwnerUid'];
        }
        if (isset($map['ResourceSpecs'])) {
            if (!empty($map['ResourceSpecs'])) {
                $model->resourceSpecs = [];
                $n = 0;
                foreach ($map['ResourceSpecs'] as $item) {
                    $model->resourceSpecs[$n++] = null !== $item ? resourceSpecs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RootDiskSizeGib'])) {
            $model->rootDiskSizeGib = $map['RootDiskSizeGib'];
        }
        if (isset($map['UserDiskSizeGib'])) {
            $model->userDiskSizeGib = $map['UserDiskSizeGib'];
        }

        return $model;
    }
}
