<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncJobDocumentsResponseBody\data;

use AlibabaCloud\Dara\Model;

class documents extends Model
{
    /**
     * @var string
     */
    public $contentHash;

    /**
     * @var string
     */
    public $ctxdbDocumentId;

    /**
     * @var string
     */
    public $providerDocumentId;

    /**
     * @var string
     */
    public $retiredAt;

    /**
     * @var string
     */
    public $sourceUpdateTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'contentHash' => 'ContentHash',
        'ctxdbDocumentId' => 'CtxdbDocumentId',
        'providerDocumentId' => 'ProviderDocumentId',
        'retiredAt' => 'RetiredAt',
        'sourceUpdateTime' => 'SourceUpdateTime',
        'status' => 'Status',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentHash) {
            $res['ContentHash'] = $this->contentHash;
        }

        if (null !== $this->ctxdbDocumentId) {
            $res['CtxdbDocumentId'] = $this->ctxdbDocumentId;
        }

        if (null !== $this->providerDocumentId) {
            $res['ProviderDocumentId'] = $this->providerDocumentId;
        }

        if (null !== $this->retiredAt) {
            $res['RetiredAt'] = $this->retiredAt;
        }

        if (null !== $this->sourceUpdateTime) {
            $res['SourceUpdateTime'] = $this->sourceUpdateTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ContentHash'])) {
            $model->contentHash = $map['ContentHash'];
        }

        if (isset($map['CtxdbDocumentId'])) {
            $model->ctxdbDocumentId = $map['CtxdbDocumentId'];
        }

        if (isset($map['ProviderDocumentId'])) {
            $model->providerDocumentId = $map['ProviderDocumentId'];
        }

        if (isset($map['RetiredAt'])) {
            $model->retiredAt = $map['RetiredAt'];
        }

        if (isset($map['SourceUpdateTime'])) {
            $model->sourceUpdateTime = $map['SourceUpdateTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
