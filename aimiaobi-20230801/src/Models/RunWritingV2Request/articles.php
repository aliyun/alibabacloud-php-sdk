<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2Request;

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
     * @var string
     */
    public $searchSourceName;

    /**
     * @var string
     */
    public $source;

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
        'pubTime' => 'PubTime',
        'searchSourceName' => 'SearchSourceName',
        'source' => 'Source',
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

        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }

        if (null !== $this->searchSourceName) {
            $res['SearchSourceName'] = $this->searchSourceName;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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

        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }

        if (isset($map['SearchSourceName'])) {
            $model->searchSourceName = $map['SearchSourceName'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
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
