<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBaseFileChunk\chunkAttachment;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBaseFileChunk\metaData;

class KnowledgeBaseFileChunk extends Model
{
    /**
     * @var chunkAttachment[]
     */
    public $chunkAttachment;

    /**
     * @var string
     */
    public $chunkContent;

    /**
     * @var int
     */
    public $chunkEnd;

    /**
     * @var string
     */
    public $chunkId;

    /**
     * @var int
     */
    public $chunkSequence;

    /**
     * @var int
     */
    public $chunkSize;

    /**
     * @var int
     */
    public $chunkStart;

    /**
     * @var string
     */
    public $chunkStatus;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var metaData
     */
    public $metaData;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $thumbnailUrl;
    protected $_name = [
        'chunkAttachment' => 'ChunkAttachment',
        'chunkContent' => 'ChunkContent',
        'chunkEnd' => 'ChunkEnd',
        'chunkId' => 'ChunkId',
        'chunkSequence' => 'ChunkSequence',
        'chunkSize' => 'ChunkSize',
        'chunkStart' => 'ChunkStart',
        'chunkStatus' => 'ChunkStatus',
        'downloadUrl' => 'DownloadUrl',
        'metaData' => 'MetaData',
        'score' => 'Score',
        'thumbnailUrl' => 'ThumbnailUrl',
    ];

    public function validate()
    {
        if (\is_array($this->chunkAttachment)) {
            Model::validateArray($this->chunkAttachment);
        }
        if (null !== $this->metaData) {
            $this->metaData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkAttachment) {
            if (\is_array($this->chunkAttachment)) {
                $res['ChunkAttachment'] = [];
                $n1 = 0;
                foreach ($this->chunkAttachment as $item1) {
                    $res['ChunkAttachment'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->chunkContent) {
            $res['ChunkContent'] = $this->chunkContent;
        }

        if (null !== $this->chunkEnd) {
            $res['ChunkEnd'] = $this->chunkEnd;
        }

        if (null !== $this->chunkId) {
            $res['ChunkId'] = $this->chunkId;
        }

        if (null !== $this->chunkSequence) {
            $res['ChunkSequence'] = $this->chunkSequence;
        }

        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }

        if (null !== $this->chunkStart) {
            $res['ChunkStart'] = $this->chunkStart;
        }

        if (null !== $this->chunkStatus) {
            $res['ChunkStatus'] = $this->chunkStatus;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->metaData) {
            $res['MetaData'] = null !== $this->metaData ? $this->metaData->toArray($noStream) : $this->metaData;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->thumbnailUrl) {
            $res['ThumbnailUrl'] = $this->thumbnailUrl;
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
        if (isset($map['ChunkAttachment'])) {
            if (!empty($map['ChunkAttachment'])) {
                $model->chunkAttachment = [];
                $n1 = 0;
                foreach ($map['ChunkAttachment'] as $item1) {
                    $model->chunkAttachment[$n1] = chunkAttachment::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ChunkContent'])) {
            $model->chunkContent = $map['ChunkContent'];
        }

        if (isset($map['ChunkEnd'])) {
            $model->chunkEnd = $map['ChunkEnd'];
        }

        if (isset($map['ChunkId'])) {
            $model->chunkId = $map['ChunkId'];
        }

        if (isset($map['ChunkSequence'])) {
            $model->chunkSequence = $map['ChunkSequence'];
        }

        if (isset($map['ChunkSize'])) {
            $model->chunkSize = $map['ChunkSize'];
        }

        if (isset($map['ChunkStart'])) {
            $model->chunkStart = $map['ChunkStart'];
        }

        if (isset($map['ChunkStatus'])) {
            $model->chunkStatus = $map['ChunkStatus'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['MetaData'])) {
            $model->metaData = metaData::fromMap($map['MetaData']);
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['ThumbnailUrl'])) {
            $model->thumbnailUrl = $map['ThumbnailUrl'];
        }

        return $model;
    }
}
