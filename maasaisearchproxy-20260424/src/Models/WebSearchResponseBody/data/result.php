<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasAISearchProxy\V20260424\Models\WebSearchResponseBody\data;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $snippet;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'snippet' => 'snippet',
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
        if (null !== $this->snippet) {
            $res['snippet'] = $this->snippet;
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
        if (isset($map['snippet'])) {
            $model->snippet = $map['snippet'];
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
