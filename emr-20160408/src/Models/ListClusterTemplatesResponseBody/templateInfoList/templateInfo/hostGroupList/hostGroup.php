<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterTemplatesResponseBody\templateInfoList\templateInfo\hostGroupList;

use AlibabaCloud\Tea\Model;

class hostGroup extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $diskCapacity;

    /**
     * @var int
     */
    public $diskCount;

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
    public $hostGroupName;

    /**
     * @var string
     */
    public $hostGroupType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $multiInstanceTypes;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $period;

    /**
     * @var int
     */
    public $sysDiskCapacity;

    /**
     * @var string
     */
    public $sysDiskType;
    protected $_name = [
        'chargeType'         => 'ChargeType',
        'diskCapacity'       => 'DiskCapacity',
        'diskCount'          => 'DiskCount',
        'diskType'           => 'DiskType',
        'hostGroupId'        => 'HostGroupId',
        'hostGroupName'      => 'HostGroupName',
        'hostGroupType'      => 'HostGroupType',
        'instanceType'       => 'InstanceType',
        'multiInstanceTypes' => 'MultiInstanceTypes',
        'nodeCount'          => 'NodeCount',
        'period'             => 'Period',
        'sysDiskCapacity'    => 'SysDiskCapacity',
        'sysDiskType'        => 'SysDiskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->diskCapacity) {
            $res['DiskCapacity'] = $this->diskCapacity;
        }
        if (null !== $this->diskCount) {
            $res['DiskCount'] = $this->diskCount;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
        }
        if (null !== $this->hostGroupType) {
            $res['HostGroupType'] = $this->hostGroupType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->multiInstanceTypes) {
            $res['MultiInstanceTypes'] = $this->multiInstanceTypes;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->sysDiskCapacity) {
            $res['SysDiskCapacity'] = $this->sysDiskCapacity;
        }
        if (null !== $this->sysDiskType) {
            $res['SysDiskType'] = $this->sysDiskType;
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DiskCapacity'])) {
            $model->diskCapacity = $map['DiskCapacity'];
        }
        if (isset($map['DiskCount'])) {
            $model->diskCount = $map['DiskCount'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }
        if (isset($map['HostGroupType'])) {
            $model->hostGroupType = $map['HostGroupType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MultiInstanceTypes'])) {
            $model->multiInstanceTypes = $map['MultiInstanceTypes'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['SysDiskCapacity'])) {
            $model->sysDiskCapacity = $map['SysDiskCapacity'];
        }
        if (isset($map['SysDiskType'])) {
            $model->sysDiskType = $map['SysDiskType'];
        }

        return $model;
    }
}
