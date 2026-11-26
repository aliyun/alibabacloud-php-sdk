<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetChunkResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $assetId;

    /**
     * @var int
     */
    public $chunkSeq;

    /**
     * @var int
     */
    public $chunkSize;

    /**
     * @var string
     */
    public $chunkToken;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $sourceLocation;

    /**
     * @var string
     */
    public $titlePath;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'assetId' => 'assetId',
        'chunkSeq' => 'chunkSeq',
        'chunkSize' => 'chunkSize',
        'chunkToken' => 'chunkToken',
        'content' => 'content',
        'createdAt' => 'createdAt',
        'enabled' => 'enabled',
        'fileName' => 'fileName',
        'sourceLocation' => 'sourceLocation',
        'titlePath' => 'titlePath',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetId) {
            $res['assetId'] = $this->assetId;
        }

        if (null !== $this->chunkSeq) {
            $res['chunkSeq'] = $this->chunkSeq;
        }

        if (null !== $this->chunkSize) {
            $res['chunkSize'] = $this->chunkSize;
        }

        if (null !== $this->chunkToken) {
            $res['chunkToken'] = $this->chunkToken;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->sourceLocation) {
            $res['sourceLocation'] = $this->sourceLocation;
        }

        if (null !== $this->titlePath) {
            $res['titlePath'] = $this->titlePath;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['assetId'])) {
            $model->assetId = $map['assetId'];
        }

        if (isset($map['chunkSeq'])) {
            $model->chunkSeq = $map['chunkSeq'];
        }

        if (isset($map['chunkSize'])) {
            $model->chunkSize = $map['chunkSize'];
        }

        if (isset($map['chunkToken'])) {
            $model->chunkToken = $map['chunkToken'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['sourceLocation'])) {
            $model->sourceLocation = $map['sourceLocation'];
        }

        if (isset($map['titlePath'])) {
            $model->titlePath = $map['titlePath'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
