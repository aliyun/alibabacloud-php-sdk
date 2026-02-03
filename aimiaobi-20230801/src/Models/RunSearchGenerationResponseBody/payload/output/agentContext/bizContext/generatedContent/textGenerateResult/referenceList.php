<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult;

use AlibabaCloud\Dara\Model;

class referenceList extends Model
{
    /**
     * @var string
     */
    public $categoryUuid;

    /**
     * @var string[]
     */
    public $chunks;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $docUuid;

    /**
     * @var string
     */
    public $extend1;

    /**
     * @var string
     */
    public $extend2;

    /**
     * @var string
     */
    public $extend3;

    /**
     * @var string
     */
    public $pubTime;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $searchSource;

    /**
     * @var string
     */
    public $searchSourceName;

    /**
     * @var string
     */
    public $searchSourceType;

    /**
     * @var bool
     */
    public $select;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $traceabilityId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'categoryUuid' => 'CategoryUuid',
        'chunks' => 'Chunks',
        'content' => 'Content',
        'docId' => 'DocId',
        'docUuid' => 'DocUuid',
        'extend1' => 'Extend1',
        'extend2' => 'Extend2',
        'extend3' => 'Extend3',
        'pubTime' => 'PubTime',
        'score' => 'Score',
        'searchSource' => 'SearchSource',
        'searchSourceName' => 'SearchSourceName',
        'searchSourceType' => 'SearchSourceType',
        'select' => 'Select',
        'source' => 'Source',
        'summary' => 'Summary',
        'tags' => 'Tags',
        'title' => 'Title',
        'traceabilityId' => 'TraceabilityId',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->chunks)) {
            Model::validateArray($this->chunks);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryUuid) {
            $res['CategoryUuid'] = $this->categoryUuid;
        }

        if (null !== $this->chunks) {
            if (\is_array($this->chunks)) {
                $res['Chunks'] = [];
                $n1 = 0;
                foreach ($this->chunks as $item1) {
                    $res['Chunks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }

        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
        }

        if (null !== $this->extend1) {
            $res['Extend1'] = $this->extend1;
        }

        if (null !== $this->extend2) {
            $res['Extend2'] = $this->extend2;
        }

        if (null !== $this->extend3) {
            $res['Extend3'] = $this->extend3;
        }

        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->searchSource) {
            $res['SearchSource'] = $this->searchSource;
        }

        if (null !== $this->searchSourceName) {
            $res['SearchSourceName'] = $this->searchSourceName;
        }

        if (null !== $this->searchSourceType) {
            $res['SearchSourceType'] = $this->searchSourceType;
        }

        if (null !== $this->select) {
            $res['Select'] = $this->select;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->traceabilityId) {
            $res['TraceabilityId'] = $this->traceabilityId;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['CategoryUuid'])) {
            $model->categoryUuid = $map['CategoryUuid'];
        }

        if (isset($map['Chunks'])) {
            if (!empty($map['Chunks'])) {
                $model->chunks = [];
                $n1 = 0;
                foreach ($map['Chunks'] as $item1) {
                    $model->chunks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }

        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }

        if (isset($map['Extend1'])) {
            $model->extend1 = $map['Extend1'];
        }

        if (isset($map['Extend2'])) {
            $model->extend2 = $map['Extend2'];
        }

        if (isset($map['Extend3'])) {
            $model->extend3 = $map['Extend3'];
        }

        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['SearchSource'])) {
            $model->searchSource = $map['SearchSource'];
        }

        if (isset($map['SearchSourceName'])) {
            $model->searchSourceName = $map['SearchSourceName'];
        }

        if (isset($map['SearchSourceType'])) {
            $model->searchSourceType = $map['SearchSourceType'];
        }

        if (isset($map['Select'])) {
            $model->select = $map['Select'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['TraceabilityId'])) {
            $model->traceabilityId = $map['TraceabilityId'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
