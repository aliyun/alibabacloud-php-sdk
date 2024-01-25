<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models;

use AlibabaCloud\Tea\Model;

class QueryItemBackgroundsRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $itemIds;
    protected $_name = [
        'itemIds' => 'ItemIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemIds) {
            $res['ItemIds'] = $this->itemIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryItemBackgroundsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemIds'])) {
            $model->itemIds = $map['ItemIds'];
        }

        return $model;
    }
}
