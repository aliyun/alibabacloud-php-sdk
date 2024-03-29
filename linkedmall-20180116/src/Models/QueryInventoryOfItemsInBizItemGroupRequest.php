<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryInventoryOfItemsInBizItemGroupRequest extends Model
{
    /**
     * @example LMALL20******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 510132
     *
     * @var string
     */
    public $divisionCode;

    /**
     * @var int[]
     */
    public $itemIds;

    /**
     * @var string[]
     */
    public $lmItemIds;

    /**
     * @example 52847******1a58205d3ce5e9328
     *
     * @var string
     */
    public $subBizId;
    protected $_name = [
        'bizId'        => 'BizId',
        'divisionCode' => 'DivisionCode',
        'itemIds'      => 'ItemIds',
        'lmItemIds'    => 'LmItemIds',
        'subBizId'     => 'SubBizId',
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
        if (null !== $this->divisionCode) {
            $res['DivisionCode'] = $this->divisionCode;
        }
        if (null !== $this->itemIds) {
            $res['ItemIds'] = $this->itemIds;
        }
        if (null !== $this->lmItemIds) {
            $res['LmItemIds'] = $this->lmItemIds;
        }
        if (null !== $this->subBizId) {
            $res['SubBizId'] = $this->subBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryInventoryOfItemsInBizItemGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['DivisionCode'])) {
            $model->divisionCode = $map['DivisionCode'];
        }
        if (isset($map['ItemIds'])) {
            if (!empty($map['ItemIds'])) {
                $model->itemIds = $map['ItemIds'];
            }
        }
        if (isset($map['LmItemIds'])) {
            if (!empty($map['LmItemIds'])) {
                $model->lmItemIds = $map['LmItemIds'];
            }
        }
        if (isset($map['SubBizId'])) {
            $model->subBizId = $map['SubBizId'];
        }

        return $model;
    }
}
