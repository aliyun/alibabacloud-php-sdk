<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetYikeAssetMediaInfoResponseBody\mediaInfo;

use AlibabaCloud\Dara\Model;

class bizData extends Model
{
    /**
     * @var string
     */
    public $auditBlockedLabel;

    /**
     * @var string
     */
    public $auditStatus;

    /**
     * @var string
     */
    public $creationJobId;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $isFavorite;

    /**
     * @var string
     */
    public $isLogicalDeleted;

    /**
     * @var string
     */
    public $mediaAssetSubType;

    /**
     * @var string
     */
    public $mediaAssetType;

    /**
     * @var string
     */
    public $productionId;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceName;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'auditBlockedLabel' => 'AuditBlockedLabel',
        'auditStatus' => 'AuditStatus',
        'creationJobId' => 'CreationJobId',
        'folderId' => 'FolderId',
        'isFavorite' => 'IsFavorite',
        'isLogicalDeleted' => 'IsLogicalDeleted',
        'mediaAssetSubType' => 'MediaAssetSubType',
        'mediaAssetType' => 'MediaAssetType',
        'productionId' => 'ProductionId',
        'prompt' => 'Prompt',
        'sourceId' => 'SourceId',
        'sourceName' => 'SourceName',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditBlockedLabel) {
            $res['AuditBlockedLabel'] = $this->auditBlockedLabel;
        }

        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }

        if (null !== $this->creationJobId) {
            $res['CreationJobId'] = $this->creationJobId;
        }

        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        if (null !== $this->isFavorite) {
            $res['IsFavorite'] = $this->isFavorite;
        }

        if (null !== $this->isLogicalDeleted) {
            $res['IsLogicalDeleted'] = $this->isLogicalDeleted;
        }

        if (null !== $this->mediaAssetSubType) {
            $res['MediaAssetSubType'] = $this->mediaAssetSubType;
        }

        if (null !== $this->mediaAssetType) {
            $res['MediaAssetType'] = $this->mediaAssetType;
        }

        if (null !== $this->productionId) {
            $res['ProductionId'] = $this->productionId;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['AuditBlockedLabel'])) {
            $model->auditBlockedLabel = $map['AuditBlockedLabel'];
        }

        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }

        if (isset($map['CreationJobId'])) {
            $model->creationJobId = $map['CreationJobId'];
        }

        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        if (isset($map['IsFavorite'])) {
            $model->isFavorite = $map['IsFavorite'];
        }

        if (isset($map['IsLogicalDeleted'])) {
            $model->isLogicalDeleted = $map['IsLogicalDeleted'];
        }

        if (isset($map['MediaAssetSubType'])) {
            $model->mediaAssetSubType = $map['MediaAssetSubType'];
        }

        if (isset($map['MediaAssetType'])) {
            $model->mediaAssetType = $map['MediaAssetType'];
        }

        if (isset($map['ProductionId'])) {
            $model->productionId = $map['ProductionId'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
