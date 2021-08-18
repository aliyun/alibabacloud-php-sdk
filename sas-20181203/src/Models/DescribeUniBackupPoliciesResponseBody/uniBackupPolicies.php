<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class uniBackupPolicies extends Model
{
    /**
     * @var string
     */
    public $policyStatus;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $latestBackResult;

    /**
     * @var string
     */
    public $uniRegionId;

    /**
     * @var string
     */
    public $planStatus;

    /**
     * @var string
     */
    public $instanceUuid;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $agentErrorMessage;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $agentStatus;

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
    public $errorCode;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $latestBackupTime;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var int
     */
    public $policyId;
    protected $_name = [
        'policyStatus'      => 'PolicyStatus',
        'errorMessage'      => 'ErrorMessage',
        'latestBackResult'  => 'LatestBackResult',
        'uniRegionId'       => 'UniRegionId',
        'planStatus'        => 'PlanStatus',
        'instanceUuid'      => 'InstanceUuid',
        'policyName'        => 'PolicyName',
        'agentErrorMessage' => 'AgentErrorMessage',
        'instanceId'        => 'InstanceId',
        'agentStatus'       => 'AgentStatus',
        'databaseType'      => 'DatabaseType',
        'uniBackUpCount'    => 'UniBackUpCount',
        'errorCode'         => 'ErrorCode',
        'databaseName'      => 'DatabaseName',
        'instanceName'      => 'InstanceName',
        'latestBackupTime'  => 'LatestBackupTime',
        'instanceStatus'    => 'InstanceStatus',
        'policyId'          => 'PolicyId',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->latestBackResult) {
            $res['LatestBackResult'] = $this->latestBackResult;
        }
        if (null !== $this->uniRegionId) {
            $res['UniRegionId'] = $this->uniRegionId;
        }
        if (null !== $this->planStatus) {
            $res['PlanStatus'] = $this->planStatus;
        }
        if (null !== $this->instanceUuid) {
            $res['InstanceUuid'] = $this->instanceUuid;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->agentErrorMessage) {
            $res['AgentErrorMessage'] = $this->agentErrorMessage;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }
        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }
        if (null !== $this->uniBackUpCount) {
            $res['UniBackUpCount'] = $this->uniBackUpCount;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->latestBackupTime) {
            $res['LatestBackupTime'] = $this->latestBackupTime;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
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
        if (isset($map['PolicyStatus'])) {
            $model->policyStatus = $map['PolicyStatus'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['LatestBackResult'])) {
            $model->latestBackResult = $map['LatestBackResult'];
        }
        if (isset($map['UniRegionId'])) {
            $model->uniRegionId = $map['UniRegionId'];
        }
        if (isset($map['PlanStatus'])) {
            $model->planStatus = $map['PlanStatus'];
        }
        if (isset($map['InstanceUuid'])) {
            $model->instanceUuid = $map['InstanceUuid'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['AgentErrorMessage'])) {
            $model->agentErrorMessage = $map['AgentErrorMessage'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }
        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }
        if (isset($map['UniBackUpCount'])) {
            $model->uniBackUpCount = $map['UniBackUpCount'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['LatestBackupTime'])) {
            $model->latestBackupTime = $map['LatestBackupTime'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
