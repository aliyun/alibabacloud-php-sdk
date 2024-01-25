<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models;

use AlibabaCloud\Tea\Model;

class QueryItemBackgroundsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $itemIdsShrink;
    protected $_name = [
        'itemIdsShrink' => 'ItemIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemIdsShrink) {
            $res['ItemIds'] = $this->itemIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryItemBackgroundsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemIds'])) {
            $model->itemIdsShrink = $map['ItemIds'];
        }

        return $model;
    }
}
