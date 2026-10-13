<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncRunItemsResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $artifactIndex;

    /**
     * @var string
     */
    public $ctxdbDocumentId;

    /**
     * @var string
     */
    public $decision;

    /**
     * @var string
     */
    public $decisionCategory;

    /**
     * @var string
     */
    public $providerDocumentId;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $sizeBytes;

    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var string
     */
    public $sourceRecordId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'artifactIndex' => 'ArtifactIndex',
        'ctxdbDocumentId' => 'CtxdbDocumentId',
        'decision' => 'Decision',
        'decisionCategory' => 'DecisionCategory',
        'providerDocumentId' => 'ProviderDocumentId',
        'reason' => 'Reason',
        'sizeBytes' => 'SizeBytes',
        'sourcePath' => 'SourcePath',
        'sourceRecordId' => 'SourceRecordId',
        'title' => 'Title',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactIndex) {
            $res['ArtifactIndex'] = $this->artifactIndex;
        }

        if (null !== $this->ctxdbDocumentId) {
            $res['CtxdbDocumentId'] = $this->ctxdbDocumentId;
        }

        if (null !== $this->decision) {
            $res['Decision'] = $this->decision;
        }

        if (null !== $this->decisionCategory) {
            $res['DecisionCategory'] = $this->decisionCategory;
        }

        if (null !== $this->providerDocumentId) {
            $res['ProviderDocumentId'] = $this->providerDocumentId;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->sizeBytes) {
            $res['SizeBytes'] = $this->sizeBytes;
        }

        if (null !== $this->sourcePath) {
            $res['SourcePath'] = $this->sourcePath;
        }

        if (null !== $this->sourceRecordId) {
            $res['SourceRecordId'] = $this->sourceRecordId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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
        if (isset($map['ArtifactIndex'])) {
            $model->artifactIndex = $map['ArtifactIndex'];
        }

        if (isset($map['CtxdbDocumentId'])) {
            $model->ctxdbDocumentId = $map['CtxdbDocumentId'];
        }

        if (isset($map['Decision'])) {
            $model->decision = $map['Decision'];
        }

        if (isset($map['DecisionCategory'])) {
            $model->decisionCategory = $map['DecisionCategory'];
        }

        if (isset($map['ProviderDocumentId'])) {
            $model->providerDocumentId = $map['ProviderDocumentId'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['SizeBytes'])) {
            $model->sizeBytes = $map['SizeBytes'];
        }

        if (isset($map['SourcePath'])) {
            $model->sourcePath = $map['SourcePath'];
        }

        if (isset($map['SourceRecordId'])) {
            $model->sourceRecordId = $map['SourceRecordId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
