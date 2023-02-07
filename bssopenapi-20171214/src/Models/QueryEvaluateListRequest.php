<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryEvaluateListRequest extends Model
{
    /**
     * @example 2020-03
     *
     * @var string
     */
    public $billCycle;

    /**
     * @example ALIYUN
     *
     * @var string[]
     */
    public $bizTypeList;

    /**
     * @example 1000
     *
     * @var int
     */
    public $endAmount;

    /**
     * @example 2020-02-02 15:00:00
     *
     * @var string
     */
    public $endBizTime;

    /**
     * @example 2020-03-02 12:00:00
     *
     * @var string
     */
    public $endSearchTime;

    /**
     * @example 2387432832696
     *
     * @var string
     */
    public $outBizId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $sortType;

    /**
     * @example 100
     *
     * @var int
     */
    public $startAmount;

    /**
     * @example 2020-02-02 12:00:00
     *
     * @var string
     */
    public $startBizTime;

    /**
     * @example 2020-02-02 12:00:00
     *
     * @var string
     */
    public $startSearchTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'billCycle'       => 'BillCycle',
        'bizTypeList'     => 'BizTypeList',
        'endAmount'       => 'EndAmount',
        'endBizTime'      => 'EndBizTime',
        'endSearchTime'   => 'EndSearchTime',
        'outBizId'        => 'OutBizId',
        'ownerId'         => 'OwnerId',
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
        'sortType'        => 'SortType',
        'startAmount'     => 'StartAmount',
        'startBizTime'    => 'StartBizTime',
        'startSearchTime' => 'StartSearchTime',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billCycle) {
            $res['BillCycle'] = $this->billCycle;
        }
        if (null !== $this->bizTypeList) {
            $res['BizTypeList'] = $this->bizTypeList;
        }
        if (null !== $this->endAmount) {
            $res['EndAmount'] = $this->endAmount;
        }
        if (null !== $this->endBizTime) {
            $res['EndBizTime'] = $this->endBizTime;
        }
        if (null !== $this->endSearchTime) {
            $res['EndSearchTime'] = $this->endSearchTime;
        }
        if (null !== $this->outBizId) {
            $res['OutBizId'] = $this->outBizId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }
        if (null !== $this->startAmount) {
            $res['StartAmount'] = $this->startAmount;
        }
        if (null !== $this->startBizTime) {
            $res['StartBizTime'] = $this->startBizTime;
        }
        if (null !== $this->startSearchTime) {
            $res['StartSearchTime'] = $this->startSearchTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEvaluateListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillCycle'])) {
            $model->billCycle = $map['BillCycle'];
        }
        if (isset($map['BizTypeList'])) {
            if (!empty($map['BizTypeList'])) {
                $model->bizTypeList = $map['BizTypeList'];
            }
        }
        if (isset($map['EndAmount'])) {
            $model->endAmount = $map['EndAmount'];
        }
        if (isset($map['EndBizTime'])) {
            $model->endBizTime = $map['EndBizTime'];
        }
        if (isset($map['EndSearchTime'])) {
            $model->endSearchTime = $map['EndSearchTime'];
        }
        if (isset($map['OutBizId'])) {
            $model->outBizId = $map['OutBizId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }
        if (isset($map['StartAmount'])) {
            $model->startAmount = $map['StartAmount'];
        }
        if (isset($map['StartBizTime'])) {
            $model->startBizTime = $map['StartBizTime'];
        }
        if (isset($map['StartSearchTime'])) {
            $model->startSearchTime = $map['StartSearchTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
