<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryUnfinishedSessions4ItemsRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var mixed[]
     */
    public $lmItemIds;

    /**
     * @var mixed[]
     */
    public $itemIds;

    /**
     * @var int
     */
    public $queryTime;
    protected $_name = [
        'bizId'     => 'BizId',
        'lmItemIds' => 'LmItemIds',
        'itemIds'   => 'ItemIds',
        'queryTime' => 'QueryTime',
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
        if (null !== $this->lmItemIds) {
            $res['LmItemIds'] = $this->lmItemIds;
        }
        if (null !== $this->itemIds) {
            $res['ItemIds'] = $this->itemIds;
        }
        if (null !== $this->queryTime) {
            $res['QueryTime'] = $this->queryTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUnfinishedSessions4ItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['LmItemIds'])) {
            $model->lmItemIds = $map['LmItemIds'];
        }
        if (isset($map['ItemIds'])) {
            $model->itemIds = $map['ItemIds'];
        }
        if (isset($map['QueryTime'])) {
            $model->queryTime = $map['QueryTime'];
        }

        return $model;
    }
}
