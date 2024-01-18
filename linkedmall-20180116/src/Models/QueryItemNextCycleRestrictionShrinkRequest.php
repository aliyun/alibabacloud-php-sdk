<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryItemNextCycleRestrictionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $lmItemIdShrink;

    /**
     * @var string
     */
    public $subBizId;
    protected $_name = [
        'bizId'          => 'BizId',
        'lmItemIdShrink' => 'LmItemId',
        'subBizId'       => 'SubBizId',
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
        if (null !== $this->lmItemIdShrink) {
            $res['LmItemId'] = $this->lmItemIdShrink;
        }
        if (null !== $this->subBizId) {
            $res['SubBizId'] = $this->subBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryItemNextCycleRestrictionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemIdShrink = $map['LmItemId'];
        }
        if (isset($map['SubBizId'])) {
            $model->subBizId = $map['SubBizId'];
        }

        return $model;
    }
}
