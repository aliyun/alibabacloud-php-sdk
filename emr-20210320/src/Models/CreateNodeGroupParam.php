<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class CreateNodeGroupParam extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;
    /**
     * @var int
     */
    public $autoRenewDuration;
    /**
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
     * @var int
     */
    public $nodeCount;
    /**
     * @var string
     */
    public $nodeGroupName;
    /**
     * @var string
     */
    public $nodeGroupType;
    /**
     * @var string
     */
    public $nodeKeyPairName;
    /**
     * @var string
     */
    public $nodeRamRole;
    /**
     * @var string
     */
    public $nodeRootPassword;
    /**
     * @var int
     */
    public $paymentDuration;
    /**
     * @var string
     */
    public $paymentDurationUnit;
    /**
     * @var string
     */
    public $paymentType;
    /**
     * @var string
     */
    public $securityGroupId;
    /**
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
     * @var bool
     */
    public $withPublicIp;
    /**
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
        if (\is_array($this->dataDisks)) {
            Model::validateArray($this->dataDisks);
        }
        if (\is_array($this->instanceTypes)) {
            Model::validateArray($this->instanceTypes);
        }
        if (null !== $this->systemDisk) {
            $this->systemDisk->validate();
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->dataDisks)) {
                $res['DataDisks'] = [];
                $n1               = 0;
                foreach ($this->dataDisks as $item1) {
                    $res['DataDisks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceTypes) {
            if (\is_array($this->instanceTypes)) {
                $res['InstanceTypes'] = [];
                $n1                   = 0;
                foreach ($this->instanceTypes as $item1) {
                    $res['InstanceTypes'][$n1++] = $item1;
                }
            }
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
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toArray($noStream) : $this->systemDisk;
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1                = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->withPublicIp) {
            $res['WithPublicIp'] = $this->withPublicIp;
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
                $n1               = 0;
                foreach ($map['DataDisks'] as $item1) {
                    $model->dataDisks[$n1++] = DiskInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = [];
                $n1                   = 0;
                foreach ($map['InstanceTypes'] as $item1) {
                    $model->instanceTypes[$n1++] = $item1;
                }
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
                $model->vSwitchIds = [];
                $n1                = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1++] = $item1;
                }
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
