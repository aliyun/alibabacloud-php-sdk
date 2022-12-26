<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateUniBackupPolicyShrinkRequest extends Model
{
    /**
     * @example admin
     *
     * @var string
     */
    public $accountName;

    /**
     * @example Pass****
     *
     * @var string
     */
    public $accountPassword;

    /**
     * @example true
     *
     * @var string
     */
    public $databaseAddByUser;

    /**
     * @example MYSQL
     *
     * @var string
     */
    public $databaseType;

    /**
     * @var string
     */
    public $fullPlanShrink;

    /**
     * @var string
     */
    public $incPlanShrink;

    /**
     * @example i-bp1fu4aqltf1huhc****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example mysql-policy
     *
     * @var string
     */
    public $policyName;

    /**
     * @example 7
     *
     * @var int
     */
    public $retention;

    /**
     * @example 5242880
     *
     * @var int
     */
    public $speedLimiter;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $uniRegionId;

    /**
     * @example 045cad48-eb08-4047-a70c-713aec7b****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'accountName'       => 'AccountName',
        'accountPassword'   => 'AccountPassword',
        'databaseAddByUser' => 'DatabaseAddByUser',
        'databaseType'      => 'DatabaseType',
        'fullPlanShrink'    => 'FullPlan',
        'incPlanShrink'     => 'IncPlan',
        'instanceId'        => 'InstanceId',
        'policyName'        => 'PolicyName',
        'retention'         => 'Retention',
        'speedLimiter'      => 'SpeedLimiter',
        'uniRegionId'       => 'UniRegionId',
        'uuid'              => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }
        if (null !== $this->databaseAddByUser) {
            $res['DatabaseAddByUser'] = $this->databaseAddByUser;
        }
        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }
        if (null !== $this->fullPlanShrink) {
            $res['FullPlan'] = $this->fullPlanShrink;
        }
        if (null !== $this->incPlanShrink) {
            $res['IncPlan'] = $this->incPlanShrink;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->speedLimiter) {
            $res['SpeedLimiter'] = $this->speedLimiter;
        }
        if (null !== $this->uniRegionId) {
            $res['UniRegionId'] = $this->uniRegionId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUniBackupPolicyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }
        if (isset($map['DatabaseAddByUser'])) {
            $model->databaseAddByUser = $map['DatabaseAddByUser'];
        }
        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }
        if (isset($map['FullPlan'])) {
            $model->fullPlanShrink = $map['FullPlan'];
        }
        if (isset($map['IncPlan'])) {
            $model->incPlanShrink = $map['IncPlan'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['SpeedLimiter'])) {
            $model->speedLimiter = $map['SpeedLimiter'];
        }
        if (isset($map['UniRegionId'])) {
            $model->uniRegionId = $map['UniRegionId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
