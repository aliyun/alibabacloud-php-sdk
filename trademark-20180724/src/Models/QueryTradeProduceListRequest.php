<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryTradeProduceListRequest extends Model
{
    /**
     * @var string
     */
    public $registerNumber;

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
    public $preOrderId;

    /**
     * @var int
     */
    public $buyerStatus;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $sortFiled;

    /**
     * @var string
     */
    public $bizId;
    protected $_name = [
        'registerNumber' => 'RegisterNumber',
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'preOrderId'     => 'PreOrderId',
        'buyerStatus'    => 'BuyerStatus',
        'sortOrder'      => 'SortOrder',
        'sortFiled'      => 'SortFiled',
        'bizId'          => 'BizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->registerNumber) {
            $res['RegisterNumber'] = $this->registerNumber;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->preOrderId) {
            $res['PreOrderId'] = $this->preOrderId;
        }
        if (null !== $this->buyerStatus) {
            $res['BuyerStatus'] = $this->buyerStatus;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->sortFiled) {
            $res['SortFiled'] = $this->sortFiled;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTradeProduceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = $map['RegisterNumber'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PreOrderId'])) {
            $model->preOrderId = $map['PreOrderId'];
        }
        if (isset($map['BuyerStatus'])) {
            $model->buyerStatus = $map['BuyerStatus'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['SortFiled'])) {
            $model->sortFiled = $map['SortFiled'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        return $model;
    }
}
