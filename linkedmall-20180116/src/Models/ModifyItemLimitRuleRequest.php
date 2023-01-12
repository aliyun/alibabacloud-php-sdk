<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class ModifyItemLimitRuleRequest extends Model
{
    /**
     * @example 1639539460838
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example LMALL20******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 1648483200000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 655******148
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 679
     *
     * @var int
     */
    public $lmActivityId;

    /**
     * @example 10000055-******09839
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example 136
     *
     * @var int
     */
    public $ruleId;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @example 5ab43d1******41abdd23629bed001a0
     *
     * @var string
     */
    public $subBizCode;

    /**
     * @var int
     */
    public $upperNum;
    protected $_name = [
        'beginTime'    => 'BeginTime',
        'bizId'        => 'BizId',
        'endTime'      => 'EndTime',
        'itemId'       => 'ItemId',
        'lmActivityId' => 'LmActivityId',
        'lmItemId'     => 'LmItemId',
        'ruleId'       => 'RuleId',
        'ruleType'     => 'RuleType',
        'subBizCode'   => 'SubBizCode',
        'upperNum'     => 'UpperNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->subBizCode) {
            $res['SubBizCode'] = $this->subBizCode;
        }
        if (null !== $this->upperNum) {
            $res['UpperNum'] = $this->upperNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyItemLimitRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['SubBizCode'])) {
            $model->subBizCode = $map['SubBizCode'];
        }
        if (isset($map['UpperNum'])) {
            $model->upperNum = $map['UpperNum'];
        }

        return $model;
    }
}
