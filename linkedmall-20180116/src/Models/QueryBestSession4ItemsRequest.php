<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryBestSession4ItemsRequest extends Model
{
    /**
     * @example LMALL20211118****
     *
     * @var string
     */
    public $bizId;

    /**
     * @example [63928655****,65314637****,65771454****]
     *
     * @var mixed[]
     */
    public $itemIds;

    /**
     * @example [\"10000791-65975997****\"]
     *
     * @var mixed[]
     */
    public $lmItemIds;
    protected $_name = [
        'bizId'     => 'BizId',
        'itemIds'   => 'ItemIds',
        'lmItemIds' => 'LmItemIds',
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
        if (null !== $this->itemIds) {
            $res['ItemIds'] = $this->itemIds;
        }
        if (null !== $this->lmItemIds) {
            $res['LmItemIds'] = $this->lmItemIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryBestSession4ItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ItemIds'])) {
            $model->itemIds = $map['ItemIds'];
        }
        if (isset($map['LmItemIds'])) {
            $model->lmItemIds = $map['LmItemIds'];
        }

        return $model;
    }
}
