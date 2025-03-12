<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\NearbySearchNovaResponseBody\data;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $title;

    /**
     * @example https://alidocs.dingtalk.com/i/team/nb9XJVAdyvMrOXyA/docs/b9XJlRRKq1BQaGyA
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'title' => 'title',
        'url'   => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
