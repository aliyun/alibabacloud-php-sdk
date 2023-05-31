<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailResponseBody\uniBackupPolicyDTO\fullPlan;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailResponseBody\uniBackupPolicyDTO\incPlan;
use AlibabaCloud\Tea\Model;

class uniBackupPolicyDTO extends Model
{
    /**
     * @description The name of the database account.
     *
     * @example admin
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The status of the database client. Valid values:
     *
     *   **UNKNOWN**: unknown
     *   **INSTALLED**: installed
     *   **INSTALL_FAILED**: installation failed
     *   **UNINSTALL_FAILED**: uninstallation failed
     *
     * @example INSTALLED
     *
     * @var string
     */
    public $agentStatus;

    /**
     * @description The type of the database. Valid values:
     *
     *   **MYSQL**
     *   **MSSQL**
     *   **Oracle**
     *
     * @example ORACLE
     *
     * @var string
     */
    public $databaseType;

    /**
     * @description The details of the policy for full backup.
     *
     * @var fullPlan
     */
    public $fullPlan;

    /**
     * @description The details of the policy for incremental backup.
     *
     * @var incPlan
     */
    public $incPlan;

    /**
     * @description The ID of the server.
     *
     * @example i-2zefcy2id5d60m9t****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server.
     *
     * @example sql-test-01
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The ID of the anti-ransomware policy.
     *
     * @example 123
     *
     * @var int
     */
    public $policyId;

    /**
     * @description The name of the anti-ransomware policy.
     *
     * @example auto_test_sql
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The status of the anti-ransomware policy. Valid values:
     *
     *   **initiating**: initializing
     *   **opening**: enabled
     *   **closing**: disabled
     *   **deleting**: deleting
     *
     * @example opening
     *
     * @var string
     */
    public $policyStatus;

    /**
     * @description The retention period of the backup snapshot.
     *
     * @example 7
     *
     * @var int
     */
    public $retention;

    /**
     * @description The maximum network bandwidth that is allowed during data backup. Unit: bytes.
     *
     * @example 5242880
     *
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
    }

    public function toMap()
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
            $res['FullPlan'] = null !== $this->fullPlan ? $this->fullPlan->toMap() : null;
        }
        if (null !== $this->incPlan) {
            $res['IncPlan'] = null !== $this->incPlan ? $this->incPlan->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return uniBackupPolicyDTO
     */
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
