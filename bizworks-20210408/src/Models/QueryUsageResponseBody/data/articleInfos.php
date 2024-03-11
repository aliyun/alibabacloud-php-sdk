<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data;

use AlibabaCloud\Tea\Model;

class articleInfos extends Model
{
    /**
     * @var string
     */
    public $articleType;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'articleType' => 'articleType',
        'title'       => 'title',
        'url'         => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->articleType) {
            $res['articleType'] = $this->articleType;
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
     * @return articleInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['articleType'])) {
            $model->articleType = $map['articleType'];
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
