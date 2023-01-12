<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class AddItemLimitRuleRequest extends Model
{
    /**
     * @example 1638958044395
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
     * @example 1647446400000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 59******0266
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
     * @example 10000055-******09769
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @example eaab4******59205ec608b2144ba
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
     * @return AddItemLimitRuleRequest
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
