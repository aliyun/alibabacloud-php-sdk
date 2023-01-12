<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryUnfinishedSessions4ItemsShrinkRequest extends Model
{
    /**
     * @example LMALL20******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example [\"60716881****\",\"59183191****\"]
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

    /**
     * @example 1637294220
     *
     * @var int
     */
    public $queryTime;
    protected $_name = [
        'bizId'           => 'BizId',
        'itemIdsShrink'   => 'ItemIds',
        'lmItemIdsShrink' => 'LmItemIds',
        'queryTime'       => 'QueryTime',
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
        if (null !== $this->queryTime) {
            $res['QueryTime'] = $this->queryTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUnfinishedSessions4ItemsShrinkRequest
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
        if (isset($map['QueryTime'])) {
            $model->queryTime = $map['QueryTime'];
        }

        return $model;
    }
}
