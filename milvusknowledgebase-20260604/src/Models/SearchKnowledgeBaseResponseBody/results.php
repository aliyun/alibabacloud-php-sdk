<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseResponseBody\results\images;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseResponseBody\results\locations;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseResponseBody\results\mediaTimeline;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseResponseBody\results\scoreDetails;

class results extends Model
{
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
    public $contentType;

    /**
     * @var string
     */
    public $documentId;

    /**
     * @var string
     */
    public $documentName;

    /**
     * @var images[]
     */
    public $images;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var locations[]
     */
    public $locations;

    /**
     * @var int
     */
    public $mediaEndMs;

    /**
     * @var int
     */
    public $mediaStartMs;

    /**
     * @var mediaTimeline[]
     */
    public $mediaTimeline;

    /**
     * @var string
     */
    public $parentChunkId;

    /**
     * @var mixed
     */
    public $scalarFields;

    /**
     * @var float
     */
    public $score;

    /**
     * @var scoreDetails
     */
    public $scoreDetails;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'chunkId' => 'chunkId',
        'content' => 'content',
        'contentType' => 'contentType',
        'documentId' => 'documentId',
        'documentName' => 'documentName',
        'images' => 'images',
        'knowledgeBaseId' => 'knowledgeBaseId',
        'locations' => 'locations',
        'mediaEndMs' => 'mediaEndMs',
        'mediaStartMs' => 'mediaStartMs',
        'mediaTimeline' => 'mediaTimeline',
        'parentChunkId' => 'parentChunkId',
        'scalarFields' => 'scalarFields',
        'score' => 'score',
        'scoreDetails' => 'scoreDetails',
        'tags' => 'tags',
    ];

    public function validate()
    {
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        if (\is_array($this->locations)) {
            Model::validateArray($this->locations);
        }
        if (\is_array($this->mediaTimeline)) {
            Model::validateArray($this->mediaTimeline);
        }
        if (null !== $this->scoreDetails) {
            $this->scoreDetails->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkId) {
            $res['chunkId'] = $this->chunkId;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->documentId) {
            $res['documentId'] = $this->documentId;
        }

        if (null !== $this->documentName) {
            $res['documentName'] = $this->documentName;
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['images'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->knowledgeBaseId) {
            $res['knowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->locations) {
            if (\is_array($this->locations)) {
                $res['locations'] = [];
                $n1 = 0;
                foreach ($this->locations as $item1) {
                    $res['locations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mediaEndMs) {
            $res['mediaEndMs'] = $this->mediaEndMs;
        }

        if (null !== $this->mediaStartMs) {
            $res['mediaStartMs'] = $this->mediaStartMs;
        }

        if (null !== $this->mediaTimeline) {
            if (\is_array($this->mediaTimeline)) {
                $res['mediaTimeline'] = [];
                $n1 = 0;
                foreach ($this->mediaTimeline as $item1) {
                    $res['mediaTimeline'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parentChunkId) {
            $res['parentChunkId'] = $this->parentChunkId;
        }

        if (null !== $this->scalarFields) {
            $res['scalarFields'] = $this->scalarFields;
        }

        if (null !== $this->score) {
            $res['score'] = $this->score;
        }

        if (null !== $this->scoreDetails) {
            $res['scoreDetails'] = null !== $this->scoreDetails ? $this->scoreDetails->toArray($noStream) : $this->scoreDetails;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['documentId'])) {
            $model->documentId = $map['documentId'];
        }

        if (isset($map['documentName'])) {
            $model->documentName = $map['documentName'];
        }

        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = [];
                $n1 = 0;
                foreach ($map['images'] as $item1) {
                    $model->images[$n1] = images::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['knowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['knowledgeBaseId'];
        }

        if (isset($map['locations'])) {
            if (!empty($map['locations'])) {
                $model->locations = [];
                $n1 = 0;
                foreach ($map['locations'] as $item1) {
                    $model->locations[$n1] = locations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['mediaEndMs'])) {
            $model->mediaEndMs = $map['mediaEndMs'];
        }

        if (isset($map['mediaStartMs'])) {
            $model->mediaStartMs = $map['mediaStartMs'];
        }

        if (isset($map['mediaTimeline'])) {
            if (!empty($map['mediaTimeline'])) {
                $model->mediaTimeline = [];
                $n1 = 0;
                foreach ($map['mediaTimeline'] as $item1) {
                    $model->mediaTimeline[$n1] = mediaTimeline::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['parentChunkId'])) {
            $model->parentChunkId = $map['parentChunkId'];
        }

        if (isset($map['scalarFields'])) {
            $model->scalarFields = $map['scalarFields'];
        }

        if (isset($map['score'])) {
            $model->score = $map['score'];
        }

        if (isset($map['scoreDetails'])) {
            $model->scoreDetails = scoreDetails::fromMap($map['scoreDetails']);
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
