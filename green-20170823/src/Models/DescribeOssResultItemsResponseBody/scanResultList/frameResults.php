<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssResultItemsResponseBody\scanResultList;

use AlibabaCloud\Tea\Model;

class frameResults extends Model
{
    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $thumbnail;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'offset'    => 'Offset',
        'thumbnail' => 'Thumbnail',
        'url'       => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->thumbnail) {
            $res['Thumbnail'] = $this->thumbnail;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frameResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['Thumbnail'])) {
            $model->thumbnail = $map['Thumbnail'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
