<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class GetItemPromotionRequest extends Model
{
    /**
     * @example LMALL20******003
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 66262416****
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 10000035-6193664*****
     *
     * @var string
     */
    public $lmItemId;
    protected $_name = [
        'bizId'    => 'BizId',
        'itemId'   => 'ItemId',
        'lmItemId' => 'LmItemId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetItemPromotionRequest
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

        return $model;
    }
}
