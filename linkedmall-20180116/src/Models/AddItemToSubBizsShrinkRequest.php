<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class AddItemToSubBizsShrinkRequest extends Model
{
    /**
     * @example LMALL20190325****
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 57835029****
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 10001036-66644894****
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example ["id1", "id2"]
     *
     * @var string
     */
    public $subBizIdsShrink;
    protected $_name = [
        'bizId'           => 'BizId',
        'itemId'          => 'ItemId',
        'lmItemId'        => 'LmItemId',
        'subBizIdsShrink' => 'SubBizIds',
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
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->subBizIdsShrink) {
            $res['SubBizIds'] = $this->subBizIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddItemToSubBizsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['SubBizIds'])) {
            $model->subBizIdsShrink = $map['SubBizIds'];
        }

        return $model;
    }
}
