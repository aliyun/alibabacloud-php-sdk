<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class CreateNodeGroupParam extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @example 1
     *
     * @var int
     */
    public $autoRenewDuration;

    /**
     * @example Monthly
     *
     * @var string
     */
    public $autoRenewDurationUnit;

    /**
     * @var DiskInfo[]
     */
    public $dataDisks;

    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @example 2
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @example core-1
     *
     * @var string
     */
    public $nodeGroupName;

    /**
     * @example CORE
     *
     * @var string
     */
    public $nodeGroupType;

    /**
     * @example sshkey
     *
     * @var string
     */
    public $nodeKeyPairName;

    /**
     * @example AliyunEmrEcsDefaultRole
     *
     * @var string
     */
    public $nodeRamRole;

    /**
     * @example *******
     *
     * @var string
     */
    public $nodeRootPassword;

    /**
     * @example 1
     *
     * @var int
     */
    public $paymentDuration;

    /**
     * @example Monthly
     *
     * @var string
     */
    public $paymentDurationUnit;

    /**
     * @example Subscription
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example sg-hp3abbae8lb6lmb1****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @var SystemDiskParam
     */
    public $systemDisk;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @example true
     *
     * @var bool
     */
    public $withPublicIp;

    /**
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenew'             => 'AutoRenew',
        'autoRenewDuration'     => 'AutoRenewDuration',
        'autoRenewDurationUnit' => 'AutoRenewDurationUnit',
        'dataDisks'             => 'DataDisks',
        'instanceTypes'         => 'InstanceTypes',
        'nodeCount'             => 'NodeCount',
        'nodeGroupName'         => 'NodeGroupName',
        'nodeGroupType'         => 'NodeGroupType',
        'nodeKeyPairName'       => 'NodeKeyPairName',
        'nodeRamRole'           => 'NodeRamRole',
        'nodeRootPassword'      => 'NodeRootPassword',
        'paymentDuration'       => 'PaymentDuration',
        'paymentDurationUnit'   => 'PaymentDurationUnit',
        'paymentType'           => 'PaymentType',
        'securityGroupId'       => 'SecurityGroupId',
        'spotStrategy'          => 'SpotStrategy',
        'systemDisk'            => 'SystemDisk',
        'vSwitchIds'            => 'VSwitchIds',
        'withPublicIp'          => 'WithPublicIp',
        'zoneId'                => 'ZoneId',
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
        if (null !== $this->autoRenewDuration) {
            $res['AutoRenewDuration'] = $this->autoRenewDuration;
        }
        if (null !== $this->autoRenewDurationUnit) {
            $res['AutoRenewDurationUnit'] = $this->autoRenewDurationUnit;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = [];
            if (null !== $this->dataDisks && \is_array($this->dataDisks)) {
                $n = 0;
                foreach ($this->dataDisks as $item) {
                    $res['DataDisks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }
        if (null !== $this->nodeGroupType) {
            $res['NodeGroupType'] = $this->nodeGroupType;
        }
        if (null !== $this->nodeKeyPairName) {
            $res['NodeKeyPairName'] = $this->nodeKeyPairName;
        }
        if (null !== $this->nodeRamRole) {
            $res['NodeRamRole'] = $this->nodeRamRole;
        }
        if (null !== $this->nodeRootPassword) {
            $res['NodeRootPassword'] = $this->nodeRootPassword;
        }
        if (null !== $this->paymentDuration) {
            $res['PaymentDuration'] = $this->paymentDuration;
        }
        if (null !== $this->paymentDurationUnit) {
            $res['PaymentDurationUnit'] = $this->paymentDurationUnit;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->withPublicIp) {
            $res['WithPublicIp'] = $this->withPublicIp;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNodeGroupParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewDuration'])) {
            $model->autoRenewDuration = $map['AutoRenewDuration'];
        }
        if (isset($map['AutoRenewDurationUnit'])) {
            $model->autoRenewDurationUnit = $map['AutoRenewDurationUnit'];
        }
        if (isset($map['DataDisks'])) {
            if (!empty($map['DataDisks'])) {
                $model->dataDisks = [];
                $n                = 0;
                foreach ($map['DataDisks'] as $item) {
                    $model->dataDisks[$n++] = null !== $item ? DiskInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }
        if (isset($map['NodeGroupType'])) {
            $model->nodeGroupType = $map['NodeGroupType'];
        }
        if (isset($map['NodeKeyPairName'])) {
            $model->nodeKeyPairName = $map['NodeKeyPairName'];
        }
        if (isset($map['NodeRamRole'])) {
            $model->nodeRamRole = $map['NodeRamRole'];
        }
        if (isset($map['NodeRootPassword'])) {
            $model->nodeRootPassword = $map['NodeRootPassword'];
        }
        if (isset($map['PaymentDuration'])) {
            $model->paymentDuration = $map['PaymentDuration'];
        }
        if (isset($map['PaymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['PaymentDurationUnit'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = SystemDiskParam::fromMap($map['SystemDisk']);
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }
        if (isset($map['WithPublicIp'])) {
            $model->withPublicIp = $map['WithPublicIp'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
