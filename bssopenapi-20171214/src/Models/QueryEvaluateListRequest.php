<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryEvaluateListRequest extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $outBizId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $startAmount;

    /**
     * @var int
     */
    public $endAmount;

    /**
     * @var string
     */
    public $startBizTime;

    /**
     * @var string
     */
    public $endBizTime;

    /**
     * @var int
     */
    public $sortType;

    /**
     * @var string
     */
    public $startSearchTime;

    /**
     * @var string
     */
    public $endSearchTime;

    /**
     * @var string
     */
    public $billCycle;

    /**
     * @var string[]
     */
    public $bizTypeList;
    protected $_name = [
        'type'            => 'Type',
        'outBizId'        => 'OutBizId',
        'ownerId'         => 'OwnerId',
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
        'startAmount'     => 'StartAmount',
        'endAmount'       => 'EndAmount',
        'startBizTime'    => 'StartBizTime',
        'endBizTime'      => 'EndBizTime',
        'sortType'        => 'SortType',
        'startSearchTime' => 'StartSearchTime',
        'endSearchTime'   => 'EndSearchTime',
        'billCycle'       => 'BillCycle',
        'bizTypeList'     => 'BizTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (null !== $this->startAmount) {
            $res['StartAmount'] = $this->startAmount;
        }
        if (null !== $this->endAmount) {
            $res['EndAmount'] = $this->endAmount;
        }
        if (null !== $this->startBizTime) {
            $res['StartBizTime'] = $this->startBizTime;
        }
        if (null !== $this->endBizTime) {
            $res['EndBizTime'] = $this->endBizTime;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }
        if (null !== $this->startSearchTime) {
            $res['StartSearchTime'] = $this->startSearchTime;
        }
        if (null !== $this->endSearchTime) {
            $res['EndSearchTime'] = $this->endSearchTime;
        }
        if (null !== $this->billCycle) {
            $res['BillCycle'] = $this->billCycle;
        }
        if (null !== $this->bizTypeList) {
            $res['BizTypeList'] = $this->bizTypeList;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
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
        if (isset($map['StartAmount'])) {
            $model->startAmount = $map['StartAmount'];
        }
        if (isset($map['EndAmount'])) {
            $model->endAmount = $map['EndAmount'];
        }
        if (isset($map['StartBizTime'])) {
            $model->startBizTime = $map['StartBizTime'];
        }
        if (isset($map['EndBizTime'])) {
            $model->endBizTime = $map['EndBizTime'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }
        if (isset($map['StartSearchTime'])) {
            $model->startSearchTime = $map['StartSearchTime'];
        }
        if (isset($map['EndSearchTime'])) {
            $model->endSearchTime = $map['EndSearchTime'];
        }
        if (isset($map['BillCycle'])) {
            $model->billCycle = $map['BillCycle'];
        }
        if (isset($map['BizTypeList'])) {
            if (!empty($map['BizTypeList'])) {
                $model->bizTypeList = $map['BizTypeList'];
            }
        }

        return $model;
    }
}
