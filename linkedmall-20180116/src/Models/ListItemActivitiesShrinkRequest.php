<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class ListItemActivitiesShrinkRequest extends Model
{
    /**
     * @example LMALL20******002
     *
     * @var string
     */
    public $bizId;

    /**
     * @example [664148141***,663735776***]
     *
     * @var string
     */
    public $itemIdsShrink;

    /**
     * @example [\"10000230-60716881****\",\"10000021-59183191****\"]
     *
     * @var string
     */
    public $lmItemIdsShrink;
    protected $_name = [
        'bizId'           => 'BizId',
        'itemIdsShrink'   => 'ItemIds',
        'lmItemIdsShrink' => 'LmItemIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->itemIdsShrink) {
            $res['ItemIds'] = $this->itemIdsShrink;
        }
        if (null !== $this->lmItemIdsShrink) {
            $res['LmItemIds'] = $this->lmItemIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListItemActivitiesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ItemIds'])) {
            $model->itemIdsShrink = $map['ItemIds'];
        }
        if (isset($map['LmItemIds'])) {
            $model->lmItemIdsShrink = $map['LmItemIds'];
        }

        return $model;
    }
}
