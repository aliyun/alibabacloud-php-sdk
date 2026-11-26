<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\SearchKnowledgeBaseResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\SearchKnowledgeBaseResponseBody\data\chunks\scores;

class chunks extends Model
{
    /**
     * @var string
     */
    public $assetId;

    /**
     * @var string
     */
    public $assetName;

    /**
     * @var int
     */
    public $chunkSeq;

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
    public $fileName;

    /**
     * @var float
     */
    public $score;

    /**
     * @var scores
     */
    public $scores;

    /**
     * @var string
     */
    public $sourceLocation;

    /**
     * @var string
     */
    public $titlePath;
    protected $_name = [
        'assetId' => 'assetId',
        'assetName' => 'assetName',
        'chunkSeq' => 'chunkSeq',
        'chunkToken' => 'chunkToken',
        'content' => 'content',
        'fileName' => 'fileName',
        'score' => 'score',
        'scores' => 'scores',
        'sourceLocation' => 'sourceLocation',
        'titlePath' => 'titlePath',
    ];

    public function validate()
    {
        if (null !== $this->scores) {
            $this->scores->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetId) {
            $res['assetId'] = $this->assetId;
        }

        if (null !== $this->assetName) {
            $res['assetName'] = $this->assetName;
        }

        if (null !== $this->chunkSeq) {
            $res['chunkSeq'] = $this->chunkSeq;
        }

        if (null !== $this->chunkToken) {
            $res['chunkToken'] = $this->chunkToken;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->score) {
            $res['score'] = $this->score;
        }

        if (null !== $this->scores) {
            $res['scores'] = null !== $this->scores ? $this->scores->toArray($noStream) : $this->scores;
        }

        if (null !== $this->sourceLocation) {
            $res['sourceLocation'] = $this->sourceLocation;
        }

        if (null !== $this->titlePath) {
            $res['titlePath'] = $this->titlePath;
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

        if (isset($map['assetName'])) {
            $model->assetName = $map['assetName'];
        }

        if (isset($map['chunkSeq'])) {
            $model->chunkSeq = $map['chunkSeq'];
        }

        if (isset($map['chunkToken'])) {
            $model->chunkToken = $map['chunkToken'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['score'])) {
            $model->score = $map['score'];
        }

        if (isset($map['scores'])) {
            $model->scores = scores::fromMap($map['scores']);
        }

        if (isset($map['sourceLocation'])) {
            $model->sourceLocation = $map['sourceLocation'];
        }

        if (isset($map['titlePath'])) {
            $model->titlePath = $map['titlePath'];
        }

        return $model;
    }
}
