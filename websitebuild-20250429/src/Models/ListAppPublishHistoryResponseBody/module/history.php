<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppPublishHistoryResponseBody\module;

use AlibabaCloud\Dara\Model;

class history extends Model
{
    /**
     * @var string
     */
    public $artifactDigest;

    /**
     * @var string
     */
    public $auditId;

    /**
     * @var string
     */
    public $bindingId;

    /**
     * @var string
     */
    public $canQuickRevert;

    /**
     * @var string
     */
    public $candidateId;

    /**
     * @var string
     */
    public $candidateStatus;

    /**
     * @var string
     */
    public $commitHash;

    /**
     * @var string
     */
    public $currentStep;

    /**
     * @var string
     */
    public $currentStepCode;

    /**
     * @var string
     */
    public $deployChannel;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $errorStep;

    /**
     * @var string
     */
    public $errorStepCode;

    /**
     * @var bool
     */
    public $isFinish;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $orderTypeCode;

    /**
     * @var int
     */
    public $percent;

    /**
     * @var string
     */
    public $platformAppid;

    /**
     * @var string
     */
    public $pluginDeclarationHash;

    /**
     * @var string
     */
    public $pluginState;

    /**
     * @var string
     */
    public $privacyDraftId;

    /**
     * @var string
     */
    public $privacyRevision;

    /**
     * @var string
     */
    public $publishDiagnostics;

    /**
     * @var string
     */
    public $publishEnv;

    /**
     * @var string
     */
    public $publishNumber;

    /**
     * @var int
     */
    public $publishOrderId;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var string
     */
    public $readbackStatus;

    /**
     * @var string[]
     */
    public $stepCodes;

    /**
     * @var string[]
     */
    public $steps;

    /**
     * @var string
     */
    public $subchannel;

    /**
     * @var string
     */
    public $submitIntentStatus;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $uploadAttemptId;

    /**
     * @var string
     */
    public $uploadLeaseState;

    /**
     * @var int
     */
    public $uploadSequence;

    /**
     * @var string
     */
    public $uploadTicketState;
    protected $_name = [
        'artifactDigest' => 'ArtifactDigest',
        'auditId' => 'AuditId',
        'bindingId' => 'BindingId',
        'canQuickRevert' => 'CanQuickRevert',
        'candidateId' => 'CandidateId',
        'candidateStatus' => 'CandidateStatus',
        'commitHash' => 'CommitHash',
        'currentStep' => 'CurrentStep',
        'currentStepCode' => 'CurrentStepCode',
        'deployChannel' => 'DeployChannel',
        'description' => 'Description',
        'errorStep' => 'ErrorStep',
        'errorStepCode' => 'ErrorStepCode',
        'isFinish' => 'IsFinish',
        'isSuccess' => 'IsSuccess',
        'msg' => 'Msg',
        'orderType' => 'OrderType',
        'orderTypeCode' => 'OrderTypeCode',
        'percent' => 'Percent',
        'platformAppid' => 'PlatformAppid',
        'pluginDeclarationHash' => 'PluginDeclarationHash',
        'pluginState' => 'PluginState',
        'privacyDraftId' => 'PrivacyDraftId',
        'privacyRevision' => 'PrivacyRevision',
        'publishDiagnostics' => 'PublishDiagnostics',
        'publishEnv' => 'PublishEnv',
        'publishNumber' => 'PublishNumber',
        'publishOrderId' => 'PublishOrderId',
        'publishTime' => 'PublishTime',
        'readbackStatus' => 'ReadbackStatus',
        'stepCodes' => 'StepCodes',
        'steps' => 'Steps',
        'subchannel' => 'Subchannel',
        'submitIntentStatus' => 'SubmitIntentStatus',
        'updatedAt' => 'UpdatedAt',
        'uploadAttemptId' => 'UploadAttemptId',
        'uploadLeaseState' => 'UploadLeaseState',
        'uploadSequence' => 'UploadSequence',
        'uploadTicketState' => 'UploadTicketState',
    ];

    public function validate()
    {
        if (\is_array($this->stepCodes)) {
            Model::validateArray($this->stepCodes);
        }
        if (\is_array($this->steps)) {
            Model::validateArray($this->steps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactDigest) {
            $res['ArtifactDigest'] = $this->artifactDigest;
        }

        if (null !== $this->auditId) {
            $res['AuditId'] = $this->auditId;
        }

        if (null !== $this->bindingId) {
            $res['BindingId'] = $this->bindingId;
        }

        if (null !== $this->canQuickRevert) {
            $res['CanQuickRevert'] = $this->canQuickRevert;
        }

        if (null !== $this->candidateId) {
            $res['CandidateId'] = $this->candidateId;
        }

        if (null !== $this->candidateStatus) {
            $res['CandidateStatus'] = $this->candidateStatus;
        }

        if (null !== $this->commitHash) {
            $res['CommitHash'] = $this->commitHash;
        }

        if (null !== $this->currentStep) {
            $res['CurrentStep'] = $this->currentStep;
        }

        if (null !== $this->currentStepCode) {
            $res['CurrentStepCode'] = $this->currentStepCode;
        }

        if (null !== $this->deployChannel) {
            $res['DeployChannel'] = $this->deployChannel;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->errorStep) {
            $res['ErrorStep'] = $this->errorStep;
        }

        if (null !== $this->errorStepCode) {
            $res['ErrorStepCode'] = $this->errorStepCode;
        }

        if (null !== $this->isFinish) {
            $res['IsFinish'] = $this->isFinish;
        }

        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->orderTypeCode) {
            $res['OrderTypeCode'] = $this->orderTypeCode;
        }

        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }

        if (null !== $this->platformAppid) {
            $res['PlatformAppid'] = $this->platformAppid;
        }

        if (null !== $this->pluginDeclarationHash) {
            $res['PluginDeclarationHash'] = $this->pluginDeclarationHash;
        }

        if (null !== $this->pluginState) {
            $res['PluginState'] = $this->pluginState;
        }

        if (null !== $this->privacyDraftId) {
            $res['PrivacyDraftId'] = $this->privacyDraftId;
        }

        if (null !== $this->privacyRevision) {
            $res['PrivacyRevision'] = $this->privacyRevision;
        }

        if (null !== $this->publishDiagnostics) {
            $res['PublishDiagnostics'] = $this->publishDiagnostics;
        }

        if (null !== $this->publishEnv) {
            $res['PublishEnv'] = $this->publishEnv;
        }

        if (null !== $this->publishNumber) {
            $res['PublishNumber'] = $this->publishNumber;
        }

        if (null !== $this->publishOrderId) {
            $res['PublishOrderId'] = $this->publishOrderId;
        }

        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }

        if (null !== $this->readbackStatus) {
            $res['ReadbackStatus'] = $this->readbackStatus;
        }

        if (null !== $this->stepCodes) {
            if (\is_array($this->stepCodes)) {
                $res['StepCodes'] = [];
                $n1 = 0;
                foreach ($this->stepCodes as $item1) {
                    $res['StepCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->steps) {
            if (\is_array($this->steps)) {
                $res['Steps'] = [];
                $n1 = 0;
                foreach ($this->steps as $item1) {
                    $res['Steps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subchannel) {
            $res['Subchannel'] = $this->subchannel;
        }

        if (null !== $this->submitIntentStatus) {
            $res['SubmitIntentStatus'] = $this->submitIntentStatus;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        if (null !== $this->uploadAttemptId) {
            $res['UploadAttemptId'] = $this->uploadAttemptId;
        }

        if (null !== $this->uploadLeaseState) {
            $res['UploadLeaseState'] = $this->uploadLeaseState;
        }

        if (null !== $this->uploadSequence) {
            $res['UploadSequence'] = $this->uploadSequence;
        }

        if (null !== $this->uploadTicketState) {
            $res['UploadTicketState'] = $this->uploadTicketState;
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
        if (isset($map['ArtifactDigest'])) {
            $model->artifactDigest = $map['ArtifactDigest'];
        }

        if (isset($map['AuditId'])) {
            $model->auditId = $map['AuditId'];
        }

        if (isset($map['BindingId'])) {
            $model->bindingId = $map['BindingId'];
        }

        if (isset($map['CanQuickRevert'])) {
            $model->canQuickRevert = $map['CanQuickRevert'];
        }

        if (isset($map['CandidateId'])) {
            $model->candidateId = $map['CandidateId'];
        }

        if (isset($map['CandidateStatus'])) {
            $model->candidateStatus = $map['CandidateStatus'];
        }

        if (isset($map['CommitHash'])) {
            $model->commitHash = $map['CommitHash'];
        }

        if (isset($map['CurrentStep'])) {
            $model->currentStep = $map['CurrentStep'];
        }

        if (isset($map['CurrentStepCode'])) {
            $model->currentStepCode = $map['CurrentStepCode'];
        }

        if (isset($map['DeployChannel'])) {
            $model->deployChannel = $map['DeployChannel'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ErrorStep'])) {
            $model->errorStep = $map['ErrorStep'];
        }

        if (isset($map['ErrorStepCode'])) {
            $model->errorStepCode = $map['ErrorStepCode'];
        }

        if (isset($map['IsFinish'])) {
            $model->isFinish = $map['IsFinish'];
        }

        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }

        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['OrderTypeCode'])) {
            $model->orderTypeCode = $map['OrderTypeCode'];
        }

        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }

        if (isset($map['PlatformAppid'])) {
            $model->platformAppid = $map['PlatformAppid'];
        }

        if (isset($map['PluginDeclarationHash'])) {
            $model->pluginDeclarationHash = $map['PluginDeclarationHash'];
        }

        if (isset($map['PluginState'])) {
            $model->pluginState = $map['PluginState'];
        }

        if (isset($map['PrivacyDraftId'])) {
            $model->privacyDraftId = $map['PrivacyDraftId'];
        }

        if (isset($map['PrivacyRevision'])) {
            $model->privacyRevision = $map['PrivacyRevision'];
        }

        if (isset($map['PublishDiagnostics'])) {
            $model->publishDiagnostics = $map['PublishDiagnostics'];
        }

        if (isset($map['PublishEnv'])) {
            $model->publishEnv = $map['PublishEnv'];
        }

        if (isset($map['PublishNumber'])) {
            $model->publishNumber = $map['PublishNumber'];
        }

        if (isset($map['PublishOrderId'])) {
            $model->publishOrderId = $map['PublishOrderId'];
        }

        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }

        if (isset($map['ReadbackStatus'])) {
            $model->readbackStatus = $map['ReadbackStatus'];
        }

        if (isset($map['StepCodes'])) {
            if (!empty($map['StepCodes'])) {
                $model->stepCodes = [];
                $n1 = 0;
                foreach ($map['StepCodes'] as $item1) {
                    $model->stepCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Steps'])) {
            if (!empty($map['Steps'])) {
                $model->steps = [];
                $n1 = 0;
                foreach ($map['Steps'] as $item1) {
                    $model->steps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Subchannel'])) {
            $model->subchannel = $map['Subchannel'];
        }

        if (isset($map['SubmitIntentStatus'])) {
            $model->submitIntentStatus = $map['SubmitIntentStatus'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        if (isset($map['UploadAttemptId'])) {
            $model->uploadAttemptId = $map['UploadAttemptId'];
        }

        if (isset($map['UploadLeaseState'])) {
            $model->uploadLeaseState = $map['UploadLeaseState'];
        }

        if (isset($map['UploadSequence'])) {
            $model->uploadSequence = $map['UploadSequence'];
        }

        if (isset($map['UploadTicketState'])) {
            $model->uploadTicketState = $map['UploadTicketState'];
        }

        return $model;
    }
}
