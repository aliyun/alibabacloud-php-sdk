<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models\UpdateCurrentItemResponseBody;

use AlibabaCloud\SDK\MindLive\V20210301\Models\UpdateCurrentItemResponseBody\data\itemBackground;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var itemBackground
     */
    public $itemBackground;
    protected $_name = [
        'itemBackground' => 'ItemBackground',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemBackground) {
            $res['ItemBackground'] = null !== $this->itemBackground ? $this->itemBackground->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemBackground'])) {
            $model->itemBackground = itemBackground::fromMap($map['ItemBackground']);
        }

        return $model;
    }
}
