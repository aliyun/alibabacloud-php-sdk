<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailResponseBody\uniBackupPolicyDTO\fullPlan;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailResponseBody\uniBackupPolicyDTO\incPlan;

class uniBackupPolicyDTO extends Model
{
    /**
     * @var string
     */
    public $accountName;
    /**
     * @var string
     */
    public $agentStatus;
    /**
     * @var string
     */
    public $databaseType;
    /**
     * @var fullPlan
     */
    public $fullPlan;
    /**
     * @var incPlan
     */
    public $incPlan;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var int
     */
    public $policyId;
    /**
     * @var string
     */
    public $policyName;
    /**
     * @var string
     */
    public $policyStatus;
    /**
     * @var int
     */
    public $retention;
    /**
     * @var int
     */
    public $speedLimiter;
    protected $_name = [
        'accountName'  => 'AccountName',
        'agentStatus'  => 'AgentStatus',
        'databaseType' => 'DatabaseType',
        'fullPlan'     => 'FullPlan',
        'incPlan'      => 'IncPlan',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'policyId'     => 'PolicyId',
        'policyName'   => 'PolicyName',
        'policyStatus' => 'PolicyStatus',
        'retention'    => 'Retention',
        'speedLimiter' => 'SpeedLimiter',
    ];

    public function validate()
    {
        if (null !== $this->fullPlan) {
            $this->fullPlan->validate();
        }
        if (null !== $this->incPlan) {
            $this->incPlan->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }

        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }

        if (null !== $this->fullPlan) {
            $res['FullPlan'] = null !== $this->fullPlan ? $this->fullPlan->toArray($noStream) : $this->fullPlan;
        }

        if (null !== $this->incPlan) {
            $res['IncPlan'] = null !== $this->incPlan ? $this->incPlan->toArray($noStream) : $this->incPlan;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        if (null !== $this->policyStatus) {
            $res['PolicyStatus'] = $this->policyStatus;
        }

        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }

        if (null !== $this->speedLimiter) {
            $res['SpeedLimiter'] = $this->speedLimiter;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }

        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }

        if (isset($map['FullPlan'])) {
            $model->fullPlan = fullPlan::fromMap($map['FullPlan']);
        }

        if (isset($map['IncPlan'])) {
            $model->incPlan = incPlan::fromMap($map['IncPlan']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        if (isset($map['PolicyStatus'])) {
            $model->policyStatus = $map['PolicyStatus'];
        }

        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }

        if (isset($map['SpeedLimiter'])) {
            $model->speedLimiter = $map['SpeedLimiter'];
        }

        return $model;
    }
}
