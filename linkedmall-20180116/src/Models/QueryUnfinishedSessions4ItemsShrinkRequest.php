<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryUnfinishedSessions4ItemsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $lmItemIdsShrink;

    /**
     * @var string
     */
    public $itemIdsShrink;

    /**
     * @var int
     */
    public $queryTime;
    protected $_name = [
        'bizId'           => 'BizId',
        'lmItemIdsShrink' => 'LmItemIds',
        'itemIdsShrink'   => 'ItemIds',
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
        if (null !== $this->lmItemIdsShrink) {
            $res['LmItemIds'] = $this->lmItemIdsShrink;
        }
        if (null !== $this->itemIdsShrink) {
            $res['ItemIds'] = $this->itemIdsShrink;
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
        if (isset($map['LmItemIds'])) {
            $model->lmItemIdsShrink = $map['LmItemIds'];
        }
        if (isset($map['ItemIds'])) {
            $model->itemIdsShrink = $map['ItemIds'];
        }
        if (isset($map['QueryTime'])) {
            $model->queryTime = $map['QueryTime'];
        }

        return $model;
    }
}
