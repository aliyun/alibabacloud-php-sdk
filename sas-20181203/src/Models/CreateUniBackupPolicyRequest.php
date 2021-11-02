<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateUniBackupPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $accountPassword;

    /**
     * @var string
     */
    public $databaseAddByUser;

    /**
     * @var string
     */
    public $databaseType;

    /**
     * @var mixed[]
     */
    public $fullPlan;

    /**
     * @var mixed[]
     */
    public $incPlan;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $retention;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $speedLimiter;

    /**
     * @var string
     */
    public $uniRegionId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'accountName'       => 'AccountName',
        'accountPassword'   => 'AccountPassword',
        'databaseAddByUser' => 'DatabaseAddByUser',
        'databaseType'      => 'DatabaseType',
        'fullPlan'          => 'FullPlan',
        'incPlan'           => 'IncPlan',
        'instanceId'        => 'InstanceId',
        'policyName'        => 'PolicyName',
        'resourceOwnerId'   => 'ResourceOwnerId',
        'retention'         => 'Retention',
        'sourceIp'          => 'SourceIp',
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
        if (null !== $this->fullPlan) {
            $res['FullPlan'] = $this->fullPlan;
        }
        if (null !== $this->incPlan) {
            $res['IncPlan'] = $this->incPlan;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
     * @return CreateUniBackupPolicyRequest
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
            $model->fullPlan = $map['FullPlan'];
        }
        if (isset($map['IncPlan'])) {
            $model->incPlan = $map['IncPlan'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
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
