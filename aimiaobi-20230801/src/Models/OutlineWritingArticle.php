<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class OutlineWritingArticle extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $outline;

    /**
     * @var string
     */
    public $primaryOutline;

    /**
     * @var string
     */
    public $pubTime;

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
    public $title;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'content' => 'Content',
        'outline' => 'Outline',
        'primaryOutline' => 'PrimaryOutline',
        'pubTime' => 'PubTime',
        'searchSource' => 'SearchSource',
        'searchSourceName' => 'SearchSourceName',
        'title' => 'Title',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->outline) {
            $res['Outline'] = $this->outline;
        }

        if (null !== $this->primaryOutline) {
            $res['PrimaryOutline'] = $this->primaryOutline;
        }

        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }

        if (null !== $this->searchSource) {
            $res['SearchSource'] = $this->searchSource;
        }

        if (null !== $this->searchSourceName) {
            $res['SearchSourceName'] = $this->searchSourceName;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Outline'])) {
            $model->outline = $map['Outline'];
        }

        if (isset($map['PrimaryOutline'])) {
            $model->primaryOutline = $map['PrimaryOutline'];
        }

        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }

        if (isset($map['SearchSource'])) {
            $model->searchSource = $map['SearchSource'];
        }

        if (isset($map['SearchSourceName'])) {
            $model->searchSourceName = $map['SearchSourceName'];
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
