<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class PublishAppInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $artifactDigest;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $candidateId;

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
    public $ext;

    /**
     * @var string
     */
    public $idempotencyKey;

    /**
     * @var int
     */
    public $logicalNumber;

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
    public $privacyDraftId;

    /**
     * @var string
     */
    public $privacyRevision;

    /**
     * @var string
     */
    public $publishNumber;

    /**
     * @var int
     */
    public $publishOrderId;

    /**
     * @var int
     */
    public $uploadSequence;

    /**
     * @var string
     */
    public $weappAction;
    protected $_name = [
        'artifactDigest' => 'ArtifactDigest',
        'bizId' => 'BizId',
        'candidateId' => 'CandidateId',
        'deployChannel' => 'DeployChannel',
        'description' => 'Description',
        'ext' => 'Ext',
        'idempotencyKey' => 'IdempotencyKey',
        'logicalNumber' => 'LogicalNumber',
        'platformAppid' => 'PlatformAppid',
        'pluginDeclarationHash' => 'PluginDeclarationHash',
        'privacyDraftId' => 'PrivacyDraftId',
        'privacyRevision' => 'PrivacyRevision',
        'publishNumber' => 'PublishNumber',
        'publishOrderId' => 'PublishOrderId',
        'uploadSequence' => 'UploadSequence',
        'weappAction' => 'WeappAction',
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

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->candidateId) {
            $res['CandidateId'] = $this->candidateId;
        }

        if (null !== $this->deployChannel) {
            $res['DeployChannel'] = $this->deployChannel;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }

        if (null !== $this->idempotencyKey) {
            $res['IdempotencyKey'] = $this->idempotencyKey;
        }

        if (null !== $this->logicalNumber) {
            $res['LogicalNumber'] = $this->logicalNumber;
        }

        if (null !== $this->platformAppid) {
            $res['PlatformAppid'] = $this->platformAppid;
        }

        if (null !== $this->pluginDeclarationHash) {
            $res['PluginDeclarationHash'] = $this->pluginDeclarationHash;
        }

        if (null !== $this->privacyDraftId) {
            $res['PrivacyDraftId'] = $this->privacyDraftId;
        }

        if (null !== $this->privacyRevision) {
            $res['PrivacyRevision'] = $this->privacyRevision;
        }

        if (null !== $this->publishNumber) {
            $res['PublishNumber'] = $this->publishNumber;
        }

        if (null !== $this->publishOrderId) {
            $res['PublishOrderId'] = $this->publishOrderId;
        }

        if (null !== $this->uploadSequence) {
            $res['UploadSequence'] = $this->uploadSequence;
        }

        if (null !== $this->weappAction) {
            $res['WeappAction'] = $this->weappAction;
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

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['CandidateId'])) {
            $model->candidateId = $map['CandidateId'];
        }

        if (isset($map['DeployChannel'])) {
            $model->deployChannel = $map['DeployChannel'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }

        if (isset($map['IdempotencyKey'])) {
            $model->idempotencyKey = $map['IdempotencyKey'];
        }

        if (isset($map['LogicalNumber'])) {
            $model->logicalNumber = $map['LogicalNumber'];
        }

        if (isset($map['PlatformAppid'])) {
            $model->platformAppid = $map['PlatformAppid'];
        }

        if (isset($map['PluginDeclarationHash'])) {
            $model->pluginDeclarationHash = $map['PluginDeclarationHash'];
        }

        if (isset($map['PrivacyDraftId'])) {
            $model->privacyDraftId = $map['PrivacyDraftId'];
        }

        if (isset($map['PrivacyRevision'])) {
            $model->privacyRevision = $map['PrivacyRevision'];
        }

        if (isset($map['PublishNumber'])) {
            $model->publishNumber = $map['PublishNumber'];
        }

        if (isset($map['PublishOrderId'])) {
            $model->publishOrderId = $map['PublishOrderId'];
        }

        if (isset($map['UploadSequence'])) {
            $model->uploadSequence = $map['UploadSequence'];
        }

        if (isset($map['WeappAction'])) {
            $model->weappAction = $map['WeappAction'];
        }

        return $model;
    }
}
