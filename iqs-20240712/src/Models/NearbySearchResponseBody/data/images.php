<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\NearbySearchResponseBody\data;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @example https://meeting.dingtalk.com/j/mblzc4zTBWp
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'url' => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
