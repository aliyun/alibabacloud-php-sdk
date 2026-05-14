<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasAISearchProxy\V20260424\Models\WebSearchResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaasAISearchProxy\V20260424\Models\WebSearchResponseBody\data\result\source;

class result extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $snippet;

    /**
     * @var source
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
        'date' => 'date',
        'snippet' => 'snippet',
        'source' => 'source',
        'title' => 'title',
        'url' => 'url',
    ];

    public function validate()
    {
        if (null !== $this->source) {
            $this->source->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }

        if (null !== $this->snippet) {
            $res['snippet'] = $this->snippet;
        }

        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
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
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }

        if (isset($map['snippet'])) {
            $model->snippet = $map['snippet'];
        }

        if (isset($map['source'])) {
            $model->source = source::fromMap($map['source']);
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
