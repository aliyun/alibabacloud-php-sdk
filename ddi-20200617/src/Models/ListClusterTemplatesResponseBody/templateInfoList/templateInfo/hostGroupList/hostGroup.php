<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterTemplatesResponseBody\templateInfoList\templateInfo\hostGroupList;

use AlibabaCloud\Tea\Model;

class hostGroup extends Model
{
    /**
     * @var int
     */
    public $sysDiskCapacity;

    /**
     * @var string
     */
    public $hostGroupType;

    /**
     * @var string
     */
    public $multiInstanceTypes;

    /**
     * @var string
     */
    public $sysDiskType;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $hostGroupId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $diskCount;

    /**
     * @var string
     */
    public $period;

    /**
     * @var int
     */
    public $diskCapacity;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $hostGroupName;
    protected $_name = [
        'sysDiskCapacity'    => 'SysDiskCapacity',
        'hostGroupType'      => 'HostGroupType',
        'multiInstanceTypes' => 'MultiInstanceTypes',
        'sysDiskType'        => 'SysDiskType',
        'chargeType'         => 'ChargeType',
        'diskType'           => 'DiskType',
        'hostGroupId'        => 'HostGroupId',
        'instanceType'       => 'InstanceType',
        'diskCount'          => 'DiskCount',
        'period'             => 'Period',
        'diskCapacity'       => 'DiskCapacity',
        'nodeCount'          => 'NodeCount',
        'hostGroupName'      => 'HostGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sysDiskCapacity) {
            $res['SysDiskCapacity'] = $this->sysDiskCapacity;
        }
        if (null !== $this->hostGroupType) {
            $res['HostGroupType'] = $this->hostGroupType;
        }
        if (null !== $this->multiInstanceTypes) {
            $res['MultiInstanceTypes'] = $this->multiInstanceTypes;
        }
        if (null !== $this->sysDiskType) {
            $res['SysDiskType'] = $this->sysDiskType;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->diskCount) {
            $res['DiskCount'] = $this->diskCount;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->diskCapacity) {
            $res['DiskCapacity'] = $this->diskCapacity;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SysDiskCapacity'])) {
            $model->sysDiskCapacity = $map['SysDiskCapacity'];
        }
        if (isset($map['HostGroupType'])) {
            $model->hostGroupType = $map['HostGroupType'];
        }
        if (isset($map['MultiInstanceTypes'])) {
            $model->multiInstanceTypes = $map['MultiInstanceTypes'];
        }
        if (isset($map['SysDiskType'])) {
            $model->sysDiskType = $map['SysDiskType'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['DiskCount'])) {
            $model->diskCount = $map['DiskCount'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['DiskCapacity'])) {
            $model->diskCapacity = $map['DiskCapacity'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }

        return $model;
    }
}
