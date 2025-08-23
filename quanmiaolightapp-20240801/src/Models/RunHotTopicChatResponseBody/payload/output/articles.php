<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload\output;

use AlibabaCloud\Dara\Model;

class articles extends Model
{
    /**
     * @var string
     */
    public $content;

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
    public $searchSourceName;

    /**
     * @var bool
     */
    public $select;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
