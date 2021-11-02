<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class DeleteItemLimitRuleRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var int
     */
    public $lmActivityId;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $subBizCode;
    protected $_name = [
        'bizId'        => 'BizId',
        'itemId'       => 'ItemId',
        'lmActivityId' => 'LmActivityId',
        'lmItemId'     => 'LmItemId',
        'ruleId'       => 'RuleId',
        'subBizCode'   => 'SubBizCode',
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
        if (null !== $this->lmActivityId) {
            $res['LmActivityId'] = $this->lmActivityId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->subBizCode) {
            $res['SubBizCode'] = $this->subBizCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteItemLimitRuleRequest
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
        if (isset($map['LmActivityId'])) {
            $model->lmActivityId = $map['LmActivityId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['SubBizCode'])) {
            $model->subBizCode = $map['SubBizCode'];
        }

        return $model;
    }
}
