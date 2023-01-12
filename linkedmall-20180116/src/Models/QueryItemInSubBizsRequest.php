<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryItemInSubBizsRequest extends Model
{
    /**
     * @example LMALL20201229****
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
     * @example ["id1","id2"]
     *
     * @var mixed[]
     */
    public $subBizIds;
    protected $_name = [
        'bizId'     => 'BizId',
        'itemId'    => 'ItemId',
        'lmItemId'  => 'LmItemId',
        'subBizIds' => 'SubBizIds',
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
        if (null !== $this->subBizIds) {
            $res['SubBizIds'] = $this->subBizIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryItemInSubBizsRequest
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
            $model->subBizIds = $map['SubBizIds'];
        }

        return $model;
    }
}
