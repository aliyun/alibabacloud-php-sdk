<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\excerptResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\excerptResult\searchResult\multimodalMedias;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\excerptResult\searchResult\textGenerateMultimodalMediaList;

class searchResult extends Model
{
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
    public $excerpt;

    /**
     * @var multimodalMedias[]
     */
    public $multimodalMedias;

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
    public $summary;

    /**
     * @var textGenerateMultimodalMediaList[]
     */
    public $textGenerateMultimodalMediaList;

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

    public function validate()
    {
        if (\is_array($this->chunks)) {
            Model::validateArray($this->chunks);
        }
        if (\is_array($this->multimodalMedias)) {
            Model::validateArray($this->multimodalMedias);
        }
        if (\is_array($this->textGenerateMultimodalMediaList)) {
            Model::validateArray($this->textGenerateMultimodalMediaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->excerpt) {
            $res['Excerpt'] = $this->excerpt;
        }

        if (null !== $this->multimodalMedias) {
            if (\is_array($this->multimodalMedias)) {
                $res['MultimodalMedias'] = [];
                $n1 = 0;
                foreach ($this->multimodalMedias as $item1) {
                    $res['MultimodalMedias'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->textGenerateMultimodalMediaList)) {
                $res['TextGenerateMultimodalMediaList'] = [];
                $n1 = 0;
                foreach ($this->textGenerateMultimodalMediaList as $item1) {
                    $res['TextGenerateMultimodalMediaList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Excerpt'])) {
            $model->excerpt = $map['Excerpt'];
        }

        if (isset($map['MultimodalMedias'])) {
            if (!empty($map['MultimodalMedias'])) {
                $model->multimodalMedias = [];
                $n1 = 0;
                foreach ($map['MultimodalMedias'] as $item1) {
                    $model->multimodalMedias[$n1] = multimodalMedias::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['TextGenerateMultimodalMediaList'] as $item1) {
                    $model->textGenerateMultimodalMediaList[$n1] = textGenerateMultimodalMediaList::fromMap($item1);
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
