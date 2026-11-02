<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseResponseBody\evidenceResults;

use AlibabaCloud\Dara\Model;

class sourceRefs extends Model
{
    /**
     * @var string
     */
    public $chunkId;

    /**
     * @var string
     */
    public $documentId;

    /**
     * @var string
     */
    public $documentName;

    /**
     * @var int
     */
    public $mediaEndMs;

    /**
     * @var int
     */
    public $mediaStartMs;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $sourceRevisionId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'chunkId' => 'chunkId',
        'documentId' => 'documentId',
        'documentName' => 'documentName',
        'mediaEndMs' => 'mediaEndMs',
        'mediaStartMs' => 'mediaStartMs',
        'pageNumber' => 'pageNumber',
        'sourceRevisionId' => 'sourceRevisionId',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkId) {
            $res['chunkId'] = $this->chunkId;
        }

        if (null !== $this->documentId) {
            $res['documentId'] = $this->documentId;
        }

        if (null !== $this->documentName) {
            $res['documentName'] = $this->documentName;
        }

        if (null !== $this->mediaEndMs) {
            $res['mediaEndMs'] = $this->mediaEndMs;
        }

        if (null !== $this->mediaStartMs) {
            $res['mediaStartMs'] = $this->mediaStartMs;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->sourceRevisionId) {
            $res['sourceRevisionId'] = $this->sourceRevisionId;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['chunkId'])) {
            $model->chunkId = $map['chunkId'];
        }

        if (isset($map['documentId'])) {
            $model->documentId = $map['documentId'];
        }

        if (isset($map['documentName'])) {
            $model->documentName = $map['documentName'];
        }

        if (isset($map['mediaEndMs'])) {
            $model->mediaEndMs = $map['mediaEndMs'];
        }

        if (isset($map['mediaStartMs'])) {
            $model->mediaStartMs = $map['mediaStartMs'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['sourceRevisionId'])) {
            $model->sourceRevisionId = $map['sourceRevisionId'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
