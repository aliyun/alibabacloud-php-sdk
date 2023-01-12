<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUserPointResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example 11******466
     *
     * @var string
     */
    public $accountId;

    /**
     * @example LMALL20******008
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 22******3646
     *
     * @var string
     */
    public $bizUid;

    /**
     * @example 1639037068811
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1000
     *
     * @var int
     */
    public $currentAmount;

    /**
     * @example 4000
     *
     * @var int
     */
    public $frozenAmount;

    /**
     * @example 5000
     *
     * @var int
     */
    public $historyAmount;

    /**
     * @example 1
     *
     * @var string
     */
    public $level;

    /**
     * @example 1642662319000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example 4
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'accountId'     => 'AccountId',
        'bizId'         => 'BizId',
        'bizUid'        => 'BizUid',
        'createTime'    => 'CreateTime',
        'currentAmount' => 'CurrentAmount',
        'frozenAmount'  => 'FrozenAmount',
        'historyAmount' => 'HistoryAmount',
        'level'         => 'Level',
        'modifyTime'    => 'ModifyTime',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizUid) {
            $res['BizUid'] = $this->bizUid;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currentAmount) {
            $res['CurrentAmount'] = $this->currentAmount;
        }
        if (null !== $this->frozenAmount) {
            $res['FrozenAmount'] = $this->frozenAmount;
        }
        if (null !== $this->historyAmount) {
            $res['HistoryAmount'] = $this->historyAmount;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizUid'])) {
            $model->bizUid = $map['BizUid'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CurrentAmount'])) {
            $model->currentAmount = $map['CurrentAmount'];
        }
        if (isset($map['FrozenAmount'])) {
            $model->frozenAmount = $map['FrozenAmount'];
        }
        if (isset($map['HistoryAmount'])) {
            $model->historyAmount = $map['HistoryAmount'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
