<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ResizeClusterV2Request;

use AlibabaCloud\Tea\Model;

class hostGroup extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example C-D7958B72E59B****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $createType;

    /**
     * @example 120
     *
     * @var int
     */
    public $diskCapacity;

    /**
     * @example 4
     *
     * @var int
     */
    public $diskCount;

    /**
     * @example CLOUD_SSD
     *
     * @var string
     */
    public $diskType;

    /**
     * @example G-48E83B43E971****
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @var string
     */
    public $hostGroupName;

    /**
     * @example TASK
     *
     * @var string
     */
    public $hostGroupType;

    /**
     * @example test-pair
     *
     * @var string
     */
    public $hostKeyPairName;

    /**
     * @example pwd
     *
     * @var string
     */
    public $hostPassword;

    /**
     * @example ecs.mn4.2xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 1
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @example crp-bp1e4wcvoucrish****
     *
     * @var string
     */
    public $privatePoolOptionsId;

    /**
     * @example Target
     *
     * @var string
     */
    public $privatePoolOptionsMatchCriteria;

    /**
     * @example 120
     *
     * @var int
     */
    public $sysDiskCapacity;

    /**
     * @example CLOUD_SSD
     *
     * @var string
     */
    public $sysDiskType;

    /**
     * @example 0
     *
     * @var int
     */
    public $vswitchId;
    protected $_name = [
        'autoRenew'                       => 'AutoRenew',
        'chargeType'                      => 'ChargeType',
        'clusterId'                       => 'ClusterId',
        'comment'                         => 'Comment',
        'createType'                      => 'CreateType',
        'diskCapacity'                    => 'DiskCapacity',
        'diskCount'                       => 'DiskCount',
        'diskType'                        => 'DiskType',
        'hostGroupId'                     => 'HostGroupId',
        'hostGroupName'                   => 'HostGroupName',
        'hostGroupType'                   => 'HostGroupType',
        'hostKeyPairName'                 => 'HostKeyPairName',
        'hostPassword'                    => 'HostPassword',
        'instanceType'                    => 'InstanceType',
        'nodeCount'                       => 'NodeCount',
        'period'                          => 'Period',
        'privatePoolOptionsId'            => 'PrivatePoolOptionsId',
        'privatePoolOptionsMatchCriteria' => 'PrivatePoolOptionsMatchCriteria',
        'sysDiskCapacity'                 => 'SysDiskCapacity',
        'sysDiskType'                     => 'SysDiskType',
        'vswitchId'                       => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createType) {
            $res['CreateType'] = $this->createType;
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
        if (null !== $this->hostKeyPairName) {
            $res['HostKeyPairName'] = $this->hostKeyPairName;
        }
        if (null !== $this->hostPassword) {
            $res['HostPassword'] = $this->hostPassword;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->privatePoolOptionsId) {
            $res['PrivatePoolOptionsId'] = $this->privatePoolOptionsId;
        }
        if (null !== $this->privatePoolOptionsMatchCriteria) {
            $res['PrivatePoolOptionsMatchCriteria'] = $this->privatePoolOptionsMatchCriteria;
        }
        if (null !== $this->sysDiskCapacity) {
            $res['SysDiskCapacity'] = $this->sysDiskCapacity;
        }
        if (null !== $this->sysDiskType) {
            $res['SysDiskType'] = $this->sysDiskType;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
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
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreateType'])) {
            $model->createType = $map['CreateType'];
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
        if (isset($map['HostKeyPairName'])) {
            $model->hostKeyPairName = $map['HostKeyPairName'];
        }
        if (isset($map['HostPassword'])) {
            $model->hostPassword = $map['HostPassword'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PrivatePoolOptionsId'])) {
            $model->privatePoolOptionsId = $map['PrivatePoolOptionsId'];
        }
        if (isset($map['PrivatePoolOptionsMatchCriteria'])) {
            $model->privatePoolOptionsMatchCriteria = $map['PrivatePoolOptionsMatchCriteria'];
        }
        if (isset($map['SysDiskCapacity'])) {
            $model->sysDiskCapacity = $map['SysDiskCapacity'];
        }
        if (isset($map['SysDiskType'])) {
            $model->sysDiskType = $map['SysDiskType'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
