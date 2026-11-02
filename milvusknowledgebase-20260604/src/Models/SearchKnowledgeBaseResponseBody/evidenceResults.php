<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseResponseBody\evidenceResults\sourceRefs;

class evidenceResults extends Model
{
    /**
     * @var string
     */
    public $batchId;

    /**
     * @var string
     */
    public $chunkId;

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
    public $entityId;

    /**
     * @var string
     */
    public $evidenceId;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $pageId;

    /**
     * @var string
     */
    public $relationId;

    /**
     * @var string
     */
    public $revisionId;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $sectionId;

    /**
     * @var int
     */
    public $sourceRefCount;

    /**
     * @var sourceRefs[]
     */
    public $sourceRefs;

    /**
     * @var bool
     */
    public $sourceRefsTruncated;

    /**
     * @var string
     */
    public $sourceTaskId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'batchId' => 'batchId',
        'chunkId' => 'chunkId',
        'content' => 'content',
        'documentId' => 'documentId',
        'entityId' => 'entityId',
        'evidenceId' => 'evidenceId',
        'kind' => 'kind',
        'knowledgeBaseId' => 'knowledgeBaseId',
        'pageId' => 'pageId',
        'relationId' => 'relationId',
        'revisionId' => 'revisionId',
        'score' => 'score',
        'sectionId' => 'sectionId',
        'sourceRefCount' => 'sourceRefCount',
        'sourceRefs' => 'sourceRefs',
        'sourceRefsTruncated' => 'sourceRefsTruncated',
        'sourceTaskId' => 'sourceTaskId',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->sourceRefs)) {
            Model::validateArray($this->sourceRefs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['batchId'] = $this->batchId;
        }

        if (null !== $this->chunkId) {
            $res['chunkId'] = $this->chunkId;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->documentId) {
            $res['documentId'] = $this->documentId;
        }

        if (null !== $this->entityId) {
            $res['entityId'] = $this->entityId;
        }

        if (null !== $this->evidenceId) {
            $res['evidenceId'] = $this->evidenceId;
        }

        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['knowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->pageId) {
            $res['pageId'] = $this->pageId;
        }

        if (null !== $this->relationId) {
            $res['relationId'] = $this->relationId;
        }

        if (null !== $this->revisionId) {
            $res['revisionId'] = $this->revisionId;
        }

        if (null !== $this->score) {
            $res['score'] = $this->score;
        }

        if (null !== $this->sectionId) {
            $res['sectionId'] = $this->sectionId;
        }

        if (null !== $this->sourceRefCount) {
            $res['sourceRefCount'] = $this->sourceRefCount;
        }

        if (null !== $this->sourceRefs) {
            if (\is_array($this->sourceRefs)) {
                $res['sourceRefs'] = [];
                $n1 = 0;
                foreach ($this->sourceRefs as $item1) {
                    $res['sourceRefs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceRefsTruncated) {
            $res['sourceRefsTruncated'] = $this->sourceRefsTruncated;
        }

        if (null !== $this->sourceTaskId) {
            $res['sourceTaskId'] = $this->sourceTaskId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['batchId'])) {
            $model->batchId = $map['batchId'];
        }

        if (isset($map['chunkId'])) {
            $model->chunkId = $map['chunkId'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['documentId'])) {
            $model->documentId = $map['documentId'];
        }

        if (isset($map['entityId'])) {
            $model->entityId = $map['entityId'];
        }

        if (isset($map['evidenceId'])) {
            $model->evidenceId = $map['evidenceId'];
        }

        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }

        if (isset($map['knowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['knowledgeBaseId'];
        }

        if (isset($map['pageId'])) {
            $model->pageId = $map['pageId'];
        }

        if (isset($map['relationId'])) {
            $model->relationId = $map['relationId'];
        }

        if (isset($map['revisionId'])) {
            $model->revisionId = $map['revisionId'];
        }

        if (isset($map['score'])) {
            $model->score = $map['score'];
        }

        if (isset($map['sectionId'])) {
            $model->sectionId = $map['sectionId'];
        }

        if (isset($map['sourceRefCount'])) {
            $model->sourceRefCount = $map['sourceRefCount'];
        }

        if (isset($map['sourceRefs'])) {
            if (!empty($map['sourceRefs'])) {
                $model->sourceRefs = [];
                $n1 = 0;
                foreach ($map['sourceRefs'] as $item1) {
                    $model->sourceRefs[$n1] = sourceRefs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sourceRefsTruncated'])) {
            $model->sourceRefsTruncated = $map['sourceRefsTruncated'];
        }

        if (isset($map['sourceTaskId'])) {
            $model->sourceTaskId = $map['sourceTaskId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
