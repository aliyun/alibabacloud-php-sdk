<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailResponseBody\uniBackupPolicyDTO\fullPlan;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailResponseBody\uniBackupPolicyDTO\incPlan;
use AlibabaCloud\Tea\Model;

class uniBackupPolicyDTO extends Model
{
    /**
     * @var string
     */
    public $policyStatus;

    /**
     * @var string
     */
    public $databaseType;

    /**
     * @var int
     */
    public $uniBackUpCount;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $retention;

    /**
     * @var int
     */
    public $speedLimiter;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $policyId;

    /**
     * @var string
     */
    public $agentStatus;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var fullPlan
     */
    public $fullPlan;

    /**
     * @var incPlan
     */
    public $incPlan;
    protected $_name = [
        'policyStatus'   => 'PolicyStatus',
        'databaseType'   => 'DatabaseType',
        'uniBackUpCount' => 'UniBackUpCount',
        'instanceName'   => 'InstanceName',
        'retention'      => 'Retention',
        'speedLimiter'   => 'SpeedLimiter',
        'policyName'     => 'PolicyName',
        'instanceId'     => 'InstanceId',
        'policyId'       => 'PolicyId',
        'agentStatus'    => 'AgentStatus',
        'accountName'    => 'AccountName',
        'fullPlan'       => 'FullPlan',
        'incPlan'        => 'IncPlan',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyStatus) {
            $res['PolicyStatus'] = $this->policyStatus;
        }
        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }
        if (null !== $this->uniBackUpCount) {
            $res['UniBackUpCount'] = $this->uniBackUpCount;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->speedLimiter) {
            $res['SpeedLimiter'] = $this->speedLimiter;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->fullPlan) {
            $res['FullPlan'] = null !== $this->fullPlan ? $this->fullPlan->toMap() : null;
        }
        if (null !== $this->incPlan) {
            $res['IncPlan'] = null !== $this->incPlan ? $this->incPlan->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uniBackupPolicyDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyStatus'])) {
            $model->policyStatus = $map['PolicyStatus'];
        }
        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }
        if (isset($map['UniBackUpCount'])) {
            $model->uniBackUpCount = $map['UniBackUpCount'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['SpeedLimiter'])) {
            $model->speedLimiter = $map['SpeedLimiter'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['FullPlan'])) {
            $model->fullPlan = fullPlan::fromMap($map['FullPlan']);
        }
        if (isset($map['IncPlan'])) {
            $model->incPlan = incPlan::fromMap($map['IncPlan']);
        }

        return $model;
    }
}
