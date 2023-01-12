<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class ListItemActivitiesRequest extends Model
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
     * @var mixed[]
     */
    public $itemIds;

    /**
     * @example [\"10000230-60716881****\",\"10000021-59183191****\"]
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
     * @return ListItemActivitiesRequest
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
