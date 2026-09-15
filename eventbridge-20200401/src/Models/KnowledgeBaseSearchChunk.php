<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\KnowledgeBaseSearchChunk\scores;

class KnowledgeBaseSearchChunk extends Model
{
    /**
     * @var int
     */
    public $chunkSeq;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $documentId;

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
        'chunkSeq' => 'ChunkSeq',
        'content' => 'Content',
        'documentId' => 'DocumentId',
        'fileName' => 'FileName',
        'score' => 'Score',
        'scores' => 'Scores',
        'sourceLocation' => 'SourceLocation',
        'titlePath' => 'TitlePath',
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
        if (null !== $this->chunkSeq) {
            $res['ChunkSeq'] = $this->chunkSeq;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->documentId) {
            $res['DocumentId'] = $this->documentId;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->scores) {
            $res['Scores'] = null !== $this->scores ? $this->scores->toArray($noStream) : $this->scores;
        }

        if (null !== $this->sourceLocation) {
            $res['SourceLocation'] = $this->sourceLocation;
        }

        if (null !== $this->titlePath) {
            $res['TitlePath'] = $this->titlePath;
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
        if (isset($map['ChunkSeq'])) {
            $model->chunkSeq = $map['ChunkSeq'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['DocumentId'])) {
            $model->documentId = $map['DocumentId'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['Scores'])) {
            $model->scores = scores::fromMap($map['Scores']);
        }

        if (isset($map['SourceLocation'])) {
            $model->sourceLocation = $map['SourceLocation'];
        }

        if (isset($map['TitlePath'])) {
            $model->titlePath = $map['TitlePath'];
        }

        return $model;
    }
}
