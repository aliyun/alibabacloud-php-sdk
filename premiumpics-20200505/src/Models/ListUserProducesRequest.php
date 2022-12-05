<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class ListUserProducesRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $extCondition;

    /**
     * @var string
     */
    public $intentionBizId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $solutionBizId;

    /**
     * @var string
     */
    public $sortParam;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'bizId'          => 'BizId',
        'bizType'        => 'BizType',
        'extCondition'   => 'ExtCondition',
        'intentionBizId' => 'IntentionBizId',
        'orderId'        => 'OrderId',
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'solutionBizId'  => 'SolutionBizId',
        'sortParam'      => 'SortParam',
        'status'         => 'Status',
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
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->extCondition) {
            $res['ExtCondition'] = $this->extCondition;
        }
        if (null !== $this->intentionBizId) {
            $res['IntentionBizId'] = $this->intentionBizId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->solutionBizId) {
            $res['SolutionBizId'] = $this->solutionBizId;
        }
        if (null !== $this->sortParam) {
            $res['SortParam'] = $this->sortParam;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserProducesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['ExtCondition'])) {
            $model->extCondition = $map['ExtCondition'];
        }
        if (isset($map['IntentionBizId'])) {
            $model->intentionBizId = $map['IntentionBizId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SolutionBizId'])) {
            $model->solutionBizId = $map['SolutionBizId'];
        }
        if (isset($map['SortParam'])) {
            $model->sortParam = $map['SortParam'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
