<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchSimilarArticlesResponseBody\payload\output;

use AlibabaCloud\Tea\Model;

class articles extends Model
{
    /**
     * @var string
     */
    public $docId;

    /**
     * @example a26c2c1
     *
     * @var string
     */
    public $docUuid;

    /**
     * @example 2025-01-16 18:07:22
     *
     * @var string
     */
    public $pubTime;

    /**
     * @var string
     */
    public $searchSourceName;

    /**
     * @example xxx.com
     *
     * @var string
     */
    public $source;

    /**
     * @example xxx
     *
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;

    /**
     * @example https://xxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'docId' => 'DocId',
        'docUuid' => 'DocUuid',
        'pubTime' => 'PubTime',
        'searchSourceName' => 'SearchSourceName',
        'source' => 'Source',
        'summary' => 'Summary',
        'title' => 'Title',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
        }
        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }
        if (null !== $this->searchSourceName) {
            $res['SearchSourceName'] = $this->searchSourceName;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
     * @return articles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }
        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }
        if (isset($map['SearchSourceName'])) {
            $model->searchSourceName = $map['SearchSourceName'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
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
