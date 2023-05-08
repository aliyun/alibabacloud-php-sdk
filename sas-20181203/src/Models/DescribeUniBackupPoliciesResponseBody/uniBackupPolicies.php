<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class uniBackupPolicies extends Model
{
    /**
     * @description The error message for the anti-ransomware agent.
     *
     * @example INSTALL_TIMEOUT
     *
     * @var string
     */
    public $agentErrorMessage;

    /**
     * @description The status of the agent. Valid values:
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
     * @description The name of the database.
     *
     * @example abc123
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The type of the database. Valid values:
     *
     *   **MYSQL**
     *   **MSSQL**
     *   **Oracle**
     *
     * @example MYSQL
     *
     * @var string
     */
    public $databaseType;

    /**
     * @description The error code returned when the backup task fails.
     *
     * @example EXPIRED
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message for the anti-ransomware policy.
     *
     * @example AttachRamRoleError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the server.
     *
     * @example i-9dp7mubt5wit6g0h****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server.
     *
     * @example sql-test-001
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The status of the Elastic Compute Service (ECS) instance. Valid values:
     *
     *   **Stopped**
     *   **Running**
     *
     * @example Running
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The UUID of the agent that is used to back up the data of the database.
     *
     * @example cf1bcad4063f11ed800000163e0e****
     *
     * @var string
     */
    public $instanceUuid;

    /**
     * @description The execution result of the last backup task.
     *
     * @example completed
     *
     * @var string
     */
    public $latestBackResult;

    /**
     * @description The time when the last backup task was executed.
     *
     * @example 2022-01-01 00:00:11
     *
     * @var string
     */
    public $latestBackupTime;

    /**
     * @description The status of the backup task. Valid values:
     *
     *   **init**: initializing
     *   **running**: running
     *   **completed**: complete
     *   **restoring**: restoring
     *   **creating**: creating
     *   **created**: created
     *
     * @example creating
     *
     * @var string
     */
    public $planStatus;

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
     * @example auto_oracle_37f
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
     * @description The region ID of the server that hosts the database.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $uniRegionId;
    protected $_name = [
        'agentErrorMessage' => 'AgentErrorMessage',
        'agentStatus'       => 'AgentStatus',
        'databaseName'      => 'DatabaseName',
        'databaseType'      => 'DatabaseType',
        'errorCode'         => 'ErrorCode',
        'errorMessage'      => 'ErrorMessage',
        'instanceId'        => 'InstanceId',
        'instanceName'      => 'InstanceName',
        'instanceStatus'    => 'InstanceStatus',
        'instanceUuid'      => 'InstanceUuid',
        'latestBackResult'  => 'LatestBackResult',
        'latestBackupTime'  => 'LatestBackupTime',
        'planStatus'        => 'PlanStatus',
        'policyId'          => 'PolicyId',
        'policyName'        => 'PolicyName',
        'policyStatus'      => 'PolicyStatus',
        'uniRegionId'       => 'UniRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentErrorMessage) {
            $res['AgentErrorMessage'] = $this->agentErrorMessage;
        }
        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceUuid) {
            $res['InstanceUuid'] = $this->instanceUuid;
        }
        if (null !== $this->latestBackResult) {
            $res['LatestBackResult'] = $this->latestBackResult;
        }
        if (null !== $this->latestBackupTime) {
            $res['LatestBackupTime'] = $this->latestBackupTime;
        }
        if (null !== $this->planStatus) {
            $res['PlanStatus'] = $this->planStatus;
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
        if (null !== $this->uniRegionId) {
            $res['UniRegionId'] = $this->uniRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uniBackupPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentErrorMessage'])) {
            $model->agentErrorMessage = $map['AgentErrorMessage'];
        }
        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceUuid'])) {
            $model->instanceUuid = $map['InstanceUuid'];
        }
        if (isset($map['LatestBackResult'])) {
            $model->latestBackResult = $map['LatestBackResult'];
        }
        if (isset($map['LatestBackupTime'])) {
            $model->latestBackupTime = $map['LatestBackupTime'];
        }
        if (isset($map['PlanStatus'])) {
            $model->planStatus = $map['PlanStatus'];
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
        if (isset($map['UniRegionId'])) {
            $model->uniRegionId = $map['UniRegionId'];
        }

        return $model;
    }
}
