<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationPlansResponseBody\migrationPlanSet;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationPlansResponseBody\migrationPlanSet\migrationPlan\securityGroupNos;
use AlibabaCloud\Tea\Model;

class migrationPlan extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $enableAutoCreateVSwitch;

    /**
     * @var bool
     */
    public $enableNetworkConnectivity;

    /**
     * @var int
     */
    public $finishInstanceCount;

    /**
     * @var string
     */
    public $migrationPlanId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $remainPrivateIp;

    /**
     * @var bool
     */
    public $remainPublicMacAsPriority;

    /**
     * @var securityGroupNos
     */
    public $securityGroupNos;

    /**
     * @var string
     */
    public $status;

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
     * @var int
     */
    public $totalInstanceCount;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime'                => 'CreateTime',
        'enableAutoCreateVSwitch'   => 'EnableAutoCreateVSwitch',
        'enableNetworkConnectivity' => 'EnableNetworkConnectivity',
        'finishInstanceCount'       => 'FinishInstanceCount',
        'migrationPlanId'           => 'MigrationPlanId',
        'name'                      => 'Name',
        'remainPrivateIp'           => 'RemainPrivateIp',
        'remainPublicMacAsPriority' => 'RemainPublicMacAsPriority',
        'securityGroupNos'          => 'SecurityGroupNos',
        'status'                    => 'Status',
        'targetVSwitchId'           => 'TargetVSwitchId',
        'targetVpcId'               => 'TargetVpcId',
        'targetZoneId'              => 'TargetZoneId',
        'totalInstanceCount'        => 'TotalInstanceCount',
        'type'                      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->enableAutoCreateVSwitch) {
            $res['EnableAutoCreateVSwitch'] = $this->enableAutoCreateVSwitch;
        }
        if (null !== $this->enableNetworkConnectivity) {
            $res['EnableNetworkConnectivity'] = $this->enableNetworkConnectivity;
        }
        if (null !== $this->finishInstanceCount) {
            $res['FinishInstanceCount'] = $this->finishInstanceCount;
        }
        if (null !== $this->migrationPlanId) {
            $res['MigrationPlanId'] = $this->migrationPlanId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remainPrivateIp) {
            $res['RemainPrivateIp'] = $this->remainPrivateIp;
        }
        if (null !== $this->remainPublicMacAsPriority) {
            $res['RemainPublicMacAsPriority'] = $this->remainPublicMacAsPriority;
        }
        if (null !== $this->securityGroupNos) {
            $res['SecurityGroupNos'] = null !== $this->securityGroupNos ? $this->securityGroupNos->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->totalInstanceCount) {
            $res['TotalInstanceCount'] = $this->totalInstanceCount;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrationPlan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EnableAutoCreateVSwitch'])) {
            $model->enableAutoCreateVSwitch = $map['EnableAutoCreateVSwitch'];
        }
        if (isset($map['EnableNetworkConnectivity'])) {
            $model->enableNetworkConnectivity = $map['EnableNetworkConnectivity'];
        }
        if (isset($map['FinishInstanceCount'])) {
            $model->finishInstanceCount = $map['FinishInstanceCount'];
        }
        if (isset($map['MigrationPlanId'])) {
            $model->migrationPlanId = $map['MigrationPlanId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RemainPrivateIp'])) {
            $model->remainPrivateIp = $map['RemainPrivateIp'];
        }
        if (isset($map['RemainPublicMacAsPriority'])) {
            $model->remainPublicMacAsPriority = $map['RemainPublicMacAsPriority'];
        }
        if (isset($map['SecurityGroupNos'])) {
            $model->securityGroupNos = securityGroupNos::fromMap($map['SecurityGroupNos']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['TotalInstanceCount'])) {
            $model->totalInstanceCount = $map['TotalInstanceCount'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
