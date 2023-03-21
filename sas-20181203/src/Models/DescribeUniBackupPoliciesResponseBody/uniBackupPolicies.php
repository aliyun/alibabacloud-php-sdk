<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class uniBackupPolicies extends Model
{
    /**
     * @var string
     */
    public $agentErrorMessage;

    /**
     * @var string
     */
    public $agentStatus;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $databaseType;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $instanceUuid;

    /**
     * @var string
     */
    public $latestBackResult;

    /**
     * @var string
     */
    public $latestBackupTime;

    /**
     * @var string
     */
    public $planStatus;

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
