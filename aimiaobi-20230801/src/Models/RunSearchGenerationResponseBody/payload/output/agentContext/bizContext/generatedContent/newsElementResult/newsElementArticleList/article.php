<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult\newsElementArticleList;

use AlibabaCloud\Tea\Model;

class article extends Model
{
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
     * @example xx
     *
     * @var string
     */
    public $title;

    /**
     * @example xx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'content' => 'Content',
        'docId' => 'DocId',
        'docUuid' => 'DocUuid',
        'pubTime' => 'PubTime',
        'score' => 'Score',
        'searchSource' => 'SearchSource',
        'searchSourceName' => 'SearchSourceName',
        'searchSourceType' => 'SearchSourceType',
        'select' => 'Select',
        'summary' => 'Summary',
        'title' => 'Title',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
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
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return article
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
