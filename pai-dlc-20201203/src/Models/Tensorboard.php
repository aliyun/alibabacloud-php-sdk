<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class Tensorboard extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtFinishTime;

    /**
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $maxRunningTimeMinutes;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $quotaId;

    /**
     * @var string
     */
    public $quotaName;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $summaryPath;

    /**
     * @var string
     */
    public $summaryRelativePath;

    /**
     * @var TensorboardDataSourceSpec[]
     */
    public $tensorboardDataSources;

    /**
     * @var string
     */
    public $tensorboardId;

    /**
     * @var TensorboardSpec
     */
    public $tensorboardSpec;

    /**
     * @var string
     */
    public $tensorboardUrl;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'cpu' => 'Cpu',
        'dataSourceId' => 'DataSourceId',
        'dataSourceType' => 'DataSourceType',
        'displayName' => 'DisplayName',
        'duration' => 'Duration',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtFinishTime' => 'GmtFinishTime',
        'gmtModifyTime' => 'GmtModifyTime',
        'jobId' => 'JobId',
        'maxRunningTimeMinutes' => 'MaxRunningTimeMinutes',
        'memory' => 'Memory',
        'options' => 'Options',
        'priority' => 'Priority',
        'quotaId' => 'QuotaId',
        'quotaName' => 'QuotaName',
        'reasonCode' => 'ReasonCode',
        'reasonMessage' => 'ReasonMessage',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'summaryPath' => 'SummaryPath',
        'summaryRelativePath' => 'SummaryRelativePath',
        'tensorboardDataSources' => 'TensorboardDataSources',
        'tensorboardId' => 'TensorboardId',
        'tensorboardSpec' => 'TensorboardSpec',
        'tensorboardUrl' => 'TensorboardUrl',
        'token' => 'Token',
        'userId' => 'UserId',
        'username' => 'Username',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->tensorboardDataSources)) {
            Model::validateArray($this->tensorboardDataSources);
        }
        if (null !== $this->tensorboardSpec) {
            $this->tensorboardSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtFinishTime) {
            $res['GmtFinishTime'] = $this->gmtFinishTime;
        }

        if (null !== $this->gmtModifyTime) {
            $res['GmtModifyTime'] = $this->gmtModifyTime;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->maxRunningTimeMinutes) {
            $res['MaxRunningTimeMinutes'] = $this->maxRunningTimeMinutes;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }

        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }

        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }

        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->summaryPath) {
            $res['SummaryPath'] = $this->summaryPath;
        }

        if (null !== $this->summaryRelativePath) {
            $res['SummaryRelativePath'] = $this->summaryRelativePath;
        }

        if (null !== $this->tensorboardDataSources) {
            if (\is_array($this->tensorboardDataSources)) {
                $res['TensorboardDataSources'] = [];
                $n1 = 0;
                foreach ($this->tensorboardDataSources as $item1) {
                    $res['TensorboardDataSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tensorboardId) {
            $res['TensorboardId'] = $this->tensorboardId;
        }

        if (null !== $this->tensorboardSpec) {
            $res['TensorboardSpec'] = null !== $this->tensorboardSpec ? $this->tensorboardSpec->toArray($noStream) : $this->tensorboardSpec;
        }

        if (null !== $this->tensorboardUrl) {
            $res['TensorboardUrl'] = $this->tensorboardUrl;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtFinishTime'])) {
            $model->gmtFinishTime = $map['GmtFinishTime'];
        }

        if (isset($map['GmtModifyTime'])) {
            $model->gmtModifyTime = $map['GmtModifyTime'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['MaxRunningTimeMinutes'])) {
            $model->maxRunningTimeMinutes = $map['MaxRunningTimeMinutes'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }

        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }

        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }

        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SummaryPath'])) {
            $model->summaryPath = $map['SummaryPath'];
        }

        if (isset($map['SummaryRelativePath'])) {
            $model->summaryRelativePath = $map['SummaryRelativePath'];
        }

        if (isset($map['TensorboardDataSources'])) {
            if (!empty($map['TensorboardDataSources'])) {
                $model->tensorboardDataSources = [];
                $n1 = 0;
                foreach ($map['TensorboardDataSources'] as $item1) {
                    $model->tensorboardDataSources[$n1] = TensorboardDataSourceSpec::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TensorboardId'])) {
            $model->tensorboardId = $map['TensorboardId'];
        }

        if (isset($map['TensorboardSpec'])) {
            $model->tensorboardSpec = TensorboardSpec::fromMap($map['TensorboardSpec']);
        }

        if (isset($map['TensorboardUrl'])) {
            $model->tensorboardUrl = $map['TensorboardUrl'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
