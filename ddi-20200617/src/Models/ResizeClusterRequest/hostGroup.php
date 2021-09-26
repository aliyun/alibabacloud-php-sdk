<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ResizeClusterRequest;

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
    public $comment;

    /**
     * @var int
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $sysDiskType;

    /**
     * @var bool
     */
    public $autoRenew;

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
     * @var string
     */
    public $hostKeyPairName;

    /**
     * @var int
     */
    public $diskCount;

    /**
     * @var string
     */
    public $createType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $hostPassword;

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

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'sysDiskCapacity' => 'SysDiskCapacity',
        'hostGroupType'   => 'HostGroupType',
        'comment'         => 'Comment',
        'vswitchId'       => 'VswitchId',
        'sysDiskType'     => 'SysDiskType',
        'autoRenew'       => 'AutoRenew',
        'chargeType'      => 'ChargeType',
        'diskType'        => 'DiskType',
        'hostGroupId'     => 'HostGroupId',
        'instanceType'    => 'InstanceType',
        'hostKeyPairName' => 'HostKeyPairName',
        'diskCount'       => 'DiskCount',
        'createType'      => 'CreateType',
        'period'          => 'Period',
        'hostPassword'    => 'HostPassword',
        'diskCapacity'    => 'DiskCapacity',
        'nodeCount'       => 'NodeCount',
        'hostGroupName'   => 'HostGroupName',
        'clusterId'       => 'ClusterId',
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
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->sysDiskType) {
            $res['SysDiskType'] = $this->sysDiskType;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
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
        if (null !== $this->hostKeyPairName) {
            $res['HostKeyPairName'] = $this->hostKeyPairName;
        }
        if (null !== $this->diskCount) {
            $res['DiskCount'] = $this->diskCount;
        }
        if (null !== $this->createType) {
            $res['CreateType'] = $this->createType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->hostPassword) {
            $res['HostPassword'] = $this->hostPassword;
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
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['SysDiskType'])) {
            $model->sysDiskType = $map['SysDiskType'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
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
        if (isset($map['HostKeyPairName'])) {
            $model->hostKeyPairName = $map['HostKeyPairName'];
        }
        if (isset($map['DiskCount'])) {
            $model->diskCount = $map['DiskCount'];
        }
        if (isset($map['CreateType'])) {
            $model->createType = $map['CreateType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['HostPassword'])) {
            $model->hostPassword = $map['HostPassword'];
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
