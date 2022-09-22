<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanRequest\customMigrationTimes;
use AlibabaCloud\Tea\Model;

class CreateMigrationPlanRequest extends Model
{
    /**
     * @var customMigrationTimes[]
     */
    public $customMigrationTimes;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var bool
     */
    public $enableAutoCreateVSwitch;

    /**
     * @var bool
     */
    public $ensureNetworkConnectivity;

    /**
     * @var string
     */
    public $globalMigrationTime;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $remainPrivateIp;

    /**
     * @var bool
     */
    public $remainPublicMacAsPriority;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string[]
     */
    public $targetSecurityGroupIds;

    /**
     * @var string
     */
    public $targetVSwitchId;

    /**
     * @var string
     */
    public $targetVpcId;

    /**
     * @var string
     */
    public $targetZoneId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'customMigrationTimes'      => 'CustomMigrationTimes',
        'dryRun'                    => 'DryRun',
        'enableAutoCreateVSwitch'   => 'EnableAutoCreateVSwitch',
        'ensureNetworkConnectivity' => 'EnsureNetworkConnectivity',
        'globalMigrationTime'       => 'GlobalMigrationTime',
        'instanceIds'               => 'InstanceIds',
        'name'                      => 'Name',
        'ownerId'                   => 'OwnerId',
        'regionId'                  => 'RegionId',
        'remainPrivateIp'           => 'RemainPrivateIp',
        'remainPublicMacAsPriority' => 'RemainPublicMacAsPriority',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'targetSecurityGroupIds'    => 'TargetSecurityGroupIds',
        'targetVSwitchId'           => 'TargetVSwitchId',
        'targetVpcId'               => 'TargetVpcId',
        'targetZoneId'              => 'TargetZoneId',
        'type'                      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customMigrationTimes) {
            $res['CustomMigrationTimes'] = [];
            if (null !== $this->customMigrationTimes && \is_array($this->customMigrationTimes)) {
                $n = 0;
                foreach ($this->customMigrationTimes as $item) {
                    $res['CustomMigrationTimes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->enableAutoCreateVSwitch) {
            $res['EnableAutoCreateVSwitch'] = $this->enableAutoCreateVSwitch;
        }
        if (null !== $this->ensureNetworkConnectivity) {
            $res['EnsureNetworkConnectivity'] = $this->ensureNetworkConnectivity;
        }
        if (null !== $this->globalMigrationTime) {
            $res['GlobalMigrationTime'] = $this->globalMigrationTime;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remainPrivateIp) {
            $res['RemainPrivateIp'] = $this->remainPrivateIp;
        }
        if (null !== $this->remainPublicMacAsPriority) {
            $res['RemainPublicMacAsPriority'] = $this->remainPublicMacAsPriority;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->targetSecurityGroupIds) {
            $res['TargetSecurityGroupIds'] = $this->targetSecurityGroupIds;
        }
        if (null !== $this->targetVSwitchId) {
            $res['TargetVSwitchId'] = $this->targetVSwitchId;
        }
        if (null !== $this->targetVpcId) {
            $res['TargetVpcId'] = $this->targetVpcId;
        }
        if (null !== $this->targetZoneId) {
            $res['TargetZoneId'] = $this->targetZoneId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMigrationPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomMigrationTimes'])) {
            if (!empty($map['CustomMigrationTimes'])) {
                $model->customMigrationTimes = [];
                $n                           = 0;
                foreach ($map['CustomMigrationTimes'] as $item) {
                    $model->customMigrationTimes[$n++] = null !== $item ? customMigrationTimes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EnableAutoCreateVSwitch'])) {
            $model->enableAutoCreateVSwitch = $map['EnableAutoCreateVSwitch'];
        }
        if (isset($map['EnsureNetworkConnectivity'])) {
            $model->ensureNetworkConnectivity = $map['EnsureNetworkConnectivity'];
        }
        if (isset($map['GlobalMigrationTime'])) {
            $model->globalMigrationTime = $map['GlobalMigrationTime'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemainPrivateIp'])) {
            $model->remainPrivateIp = $map['RemainPrivateIp'];
        }
        if (isset($map['RemainPublicMacAsPriority'])) {
            $model->remainPublicMacAsPriority = $map['RemainPublicMacAsPriority'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TargetSecurityGroupIds'])) {
            if (!empty($map['TargetSecurityGroupIds'])) {
                $model->targetSecurityGroupIds = $map['TargetSecurityGroupIds'];
            }
        }
        if (isset($map['TargetVSwitchId'])) {
            $model->targetVSwitchId = $map['TargetVSwitchId'];
        }
        if (isset($map['TargetVpcId'])) {
            $model->targetVpcId = $map['TargetVpcId'];
        }
        if (isset($map['TargetZoneId'])) {
            $model->targetZoneId = $map['TargetZoneId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
