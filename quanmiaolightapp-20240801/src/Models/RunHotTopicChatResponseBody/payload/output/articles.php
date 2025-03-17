<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload\output;

use AlibabaCloud\Tea\Model;

class articles extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $content;

    /**
     * @example 2024-09-22 16:45:06
     *
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
    public $searchSourceName;

    /**
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
     * @example test
     *
     * @var string
     */
    public $title;

    /**
     * @example http://xxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'content' => 'content',
        'pubTime' => 'pubTime',
        'score' => 'score',
        'searchSourceName' => 'searchSourceName',
        'select' => 'select',
        'summary' => 'summary',
        'title' => 'title',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->pubTime) {
            $res['pubTime'] = $this->pubTime;
        }
        if (null !== $this->score) {
            $res['score'] = $this->score;
        }
        if (null !== $this->searchSourceName) {
            $res['searchSourceName'] = $this->searchSourceName;
        }
        if (null !== $this->select) {
            $res['select'] = $this->select;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['pubTime'])) {
            $model->pubTime = $map['pubTime'];
        }
        if (isset($map['score'])) {
            $model->score = $map['score'];
        }
        if (isset($map['searchSourceName'])) {
            $model->searchSourceName = $map['searchSourceName'];
        }
        if (isset($map['select'])) {
            $model->select = $map['select'];
        }
        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
