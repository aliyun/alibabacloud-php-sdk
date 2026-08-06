<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseRequest\image;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseRequest\retrievalConfig;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseRequest\tagFilter;

class SearchKnowledgeBaseRequest extends Model
{
    /**
     * @var string[]
     */
    public $documentIds;

    /**
     * @var bool
     */
    public $enableKnowledgeGraph;

    /**
     * @var image
     */
    public $image;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $rerankModelId;

    /**
     * @var string
     */
    public $rerankModelName;

    /**
     * @var retrievalConfig
     */
    public $retrievalConfig;

    /**
     * @var tagFilter
     */
    public $tagFilter;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'documentIds' => 'documentIds',
        'enableKnowledgeGraph' => 'enableKnowledgeGraph',
        'image' => 'image',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'query' => 'query',
        'rerankModelId' => 'rerankModelId',
        'rerankModelName' => 'rerankModelName',
        'retrievalConfig' => 'retrievalConfig',
        'tagFilter' => 'tagFilter',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->documentIds)) {
            Model::validateArray($this->documentIds);
        }
        if (null !== $this->image) {
            $this->image->validate();
        }
        if (null !== $this->retrievalConfig) {
            $this->retrievalConfig->validate();
        }
        if (null !== $this->tagFilter) {
            $this->tagFilter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->documentIds) {
            if (\is_array($this->documentIds)) {
                $res['documentIds'] = [];
                $n1 = 0;
                foreach ($this->documentIds as $item1) {
                    $res['documentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableKnowledgeGraph) {
            $res['enableKnowledgeGraph'] = $this->enableKnowledgeGraph;
        }

        if (null !== $this->image) {
            $res['image'] = null !== $this->image ? $this->image->toArray($noStream) : $this->image;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->rerankModelId) {
            $res['rerankModelId'] = $this->rerankModelId;
        }

        if (null !== $this->rerankModelName) {
            $res['rerankModelName'] = $this->rerankModelName;
        }

        if (null !== $this->retrievalConfig) {
            $res['retrievalConfig'] = null !== $this->retrievalConfig ? $this->retrievalConfig->toArray($noStream) : $this->retrievalConfig;
        }

        if (null !== $this->tagFilter) {
            $res['tagFilter'] = null !== $this->tagFilter ? $this->tagFilter->toArray($noStream) : $this->tagFilter;
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
        if (isset($map['documentIds'])) {
            if (!empty($map['documentIds'])) {
                $model->documentIds = [];
                $n1 = 0;
                foreach ($map['documentIds'] as $item1) {
                    $model->documentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['enableKnowledgeGraph'])) {
            $model->enableKnowledgeGraph = $map['enableKnowledgeGraph'];
        }

        if (isset($map['image'])) {
            $model->image = image::fromMap($map['image']);
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['rerankModelId'])) {
            $model->rerankModelId = $map['rerankModelId'];
        }

        if (isset($map['rerankModelName'])) {
            $model->rerankModelName = $map['rerankModelName'];
        }

        if (isset($map['retrievalConfig'])) {
            $model->retrievalConfig = retrievalConfig::fromMap($map['retrievalConfig']);
        }

        if (isset($map['tagFilter'])) {
            $model->tagFilter = tagFilter::fromMap($map['tagFilter']);
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
