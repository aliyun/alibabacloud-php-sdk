<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\excerptResult;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\excerptResult\searchResult\multimodalMedias;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\excerptResult\searchResult\textGenerateMultimodalMediaList;
use AlibabaCloud\Tea\Model;

class searchResult extends Model
{
    /**
     * @var string[]
     */
    public $chunks;

    /**
     * @example xx
     *
     * @var string
     */
    public $content;

    /**
     * @example xx
     *
     * @var string
     */
    public $docId;

    /**
     * @example xx
     *
     * @var string
     */
    public $docUuid;

    /**
     * @example xx
     *
     * @var string
     */
    public $excerpt;

    /**
     * @var multimodalMedias[]
     */
    public $multimodalMedias;

    /**
     * @example 2023-04-04 08:39:09
     *
     * @var string
     */
    public $pubTime;

    /**
     * @example 0.99
     *
     * @var float
     */
    public $score;

    /**
     * @example QuarkCommonNews
     *
     * @var string
     */
    public $searchSource;

    /**
     * @example 互联网搜索
     *
     * @var string
     */
    public $searchSourceName;

    /**
     * @example SystemSearch
     *
     * @var string
     */
    public $searchSourceType;

    /**
     * @example true
     *
     * @var bool
     */
    public $select;

    /**
     * @example xx
     *
     * @var string
     */
    public $summary;

    /**
     * @var textGenerateMultimodalMediaList[]
     */
    public $textGenerateMultimodalMediaList;

    /**
     * @example xx
     *
     * @var string
     */
    public $title;

    /**
     * @example 1
     *
     * @var int
     */
    public $traceabilityId;

    /**
     * @example xx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'chunks' => 'Chunks',
        'content' => 'Content',
        'docId' => 'DocId',
        'docUuid' => 'DocUuid',
        'excerpt' => 'Excerpt',
        'multimodalMedias' => 'MultimodalMedias',
        'pubTime' => 'PubTime',
        'score' => 'Score',
        'searchSource' => 'SearchSource',
        'searchSourceName' => 'SearchSourceName',
        'searchSourceType' => 'SearchSourceType',
        'select' => 'Select',
        'summary' => 'Summary',
        'textGenerateMultimodalMediaList' => 'TextGenerateMultimodalMediaList',
        'title' => 'Title',
        'traceabilityId' => 'TraceabilityId',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->chunks) {
            $res['Chunks'] = $this->chunks;
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
        if (null !== $this->excerpt) {
            $res['Excerpt'] = $this->excerpt;
        }
        if (null !== $this->multimodalMedias) {
            $res['MultimodalMedias'] = [];
            if (null !== $this->multimodalMedias && \is_array($this->multimodalMedias)) {
                $n = 0;
                foreach ($this->multimodalMedias as $item) {
                    $res['MultimodalMedias'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->textGenerateMultimodalMediaList) {
            $res['TextGenerateMultimodalMediaList'] = [];
            if (null !== $this->textGenerateMultimodalMediaList && \is_array($this->textGenerateMultimodalMediaList)) {
                $n = 0;
                foreach ($this->textGenerateMultimodalMediaList as $item) {
                    $res['TextGenerateMultimodalMediaList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return searchResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Chunks'])) {
            if (!empty($map['Chunks'])) {
                $model->chunks = $map['Chunks'];
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
        if (isset($map['Excerpt'])) {
            $model->excerpt = $map['Excerpt'];
        }
        if (isset($map['MultimodalMedias'])) {
            if (!empty($map['MultimodalMedias'])) {
                $model->multimodalMedias = [];
                $n = 0;
                foreach ($map['MultimodalMedias'] as $item) {
                    $model->multimodalMedias[$n++] = null !== $item ? multimodalMedias::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['TextGenerateMultimodalMediaList'])) {
            if (!empty($map['TextGenerateMultimodalMediaList'])) {
                $model->textGenerateMultimodalMediaList = [];
                $n = 0;
                foreach ($map['TextGenerateMultimodalMediaList'] as $item) {
                    $model->textGenerateMultimodalMediaList[$n++] = null !== $item ? textGenerateMultimodalMediaList::fromMap($item) : $item;
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
