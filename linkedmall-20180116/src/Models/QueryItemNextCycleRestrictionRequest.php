<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryItemNextCycleRestrictionRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string[]
     */
    public $lmItemId;

    /**
     * @var string
     */
    public $subBizId;
    protected $_name = [
        'bizId'    => 'BizId',
        'lmItemId' => 'LmItemId',
        'subBizId' => 'SubBizId',
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
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->subBizId) {
            $res['SubBizId'] = $this->subBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryItemNextCycleRestrictionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['LmItemId'])) {
            if (!empty($map['LmItemId'])) {
                $model->lmItemId = $map['LmItemId'];
            }
        }
        if (isset($map['SubBizId'])) {
            $model->subBizId = $map['SubBizId'];
        }

        return $model;
    }
}
