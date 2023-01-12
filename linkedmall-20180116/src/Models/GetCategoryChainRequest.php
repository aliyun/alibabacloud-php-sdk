<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class GetCategoryChainRequest extends Model
{
    /**
     * @example LMALL20******003
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 50012478
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example 637284556514
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 10000055-609650881234
     *
     * @var string
     */
    public $lmItemId;
    protected $_name = [
        'bizId'      => 'BizId',
        'categoryId' => 'CategoryId',
        'itemId'     => 'ItemId',
        'lmItemId'   => 'LmItemId',
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
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
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
     * @return GetCategoryChainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
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
