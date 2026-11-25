<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\PublishAppInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
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
    public $readbackStatus;

    /**
     * @var string
     */
    public $submitIntentStatus;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var int
     */
    public $uploadSequence;
    protected $_name = [
        'artifactDigest' => 'ArtifactDigest',
        'auditId' => 'AuditId',
        'candidateId' => 'CandidateId',
        'candidateStatus' => 'CandidateStatus',
        'commitHash' => 'CommitHash',
        'platformAppid' => 'PlatformAppid',
        'pluginDeclarationHash' => 'PluginDeclarationHash',
        'pluginState' => 'PluginState',
        'privacyDraftId' => 'PrivacyDraftId',
        'privacyRevision' => 'PrivacyRevision',
        'publishEnv' => 'PublishEnv',
        'publishNumber' => 'PublishNumber',
        'publishOrderId' => 'PublishOrderId',
        'readbackStatus' => 'ReadbackStatus',
        'submitIntentStatus' => 'SubmitIntentStatus',
        'updatedAt' => 'UpdatedAt',
        'uploadSequence' => 'UploadSequence',
    ];

    public function validate()
    {
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

        if (null !== $this->candidateId) {
            $res['CandidateId'] = $this->candidateId;
        }

        if (null !== $this->candidateStatus) {
            $res['CandidateStatus'] = $this->candidateStatus;
        }

        if (null !== $this->commitHash) {
            $res['CommitHash'] = $this->commitHash;
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

        if (null !== $this->publishEnv) {
            $res['PublishEnv'] = $this->publishEnv;
        }

        if (null !== $this->publishNumber) {
            $res['PublishNumber'] = $this->publishNumber;
        }

        if (null !== $this->publishOrderId) {
            $res['PublishOrderId'] = $this->publishOrderId;
        }

        if (null !== $this->readbackStatus) {
            $res['ReadbackStatus'] = $this->readbackStatus;
        }

        if (null !== $this->submitIntentStatus) {
            $res['SubmitIntentStatus'] = $this->submitIntentStatus;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        if (null !== $this->uploadSequence) {
            $res['UploadSequence'] = $this->uploadSequence;
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

        if (isset($map['CandidateId'])) {
            $model->candidateId = $map['CandidateId'];
        }

        if (isset($map['CandidateStatus'])) {
            $model->candidateStatus = $map['CandidateStatus'];
        }

        if (isset($map['CommitHash'])) {
            $model->commitHash = $map['CommitHash'];
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

        if (isset($map['PublishEnv'])) {
            $model->publishEnv = $map['PublishEnv'];
        }

        if (isset($map['PublishNumber'])) {
            $model->publishNumber = $map['PublishNumber'];
        }

        if (isset($map['PublishOrderId'])) {
            $model->publishOrderId = $map['PublishOrderId'];
        }

        if (isset($map['ReadbackStatus'])) {
            $model->readbackStatus = $map['ReadbackStatus'];
        }

        if (isset($map['SubmitIntentStatus'])) {
            $model->submitIntentStatus = $map['SubmitIntentStatus'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        if (isset($map['UploadSequence'])) {
            $model->uploadSequence = $map['UploadSequence'];
        }

        return $model;
    }
}
