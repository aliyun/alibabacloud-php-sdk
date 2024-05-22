<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserLogRequest extends Model
{
    /**
     * @var string
     */
    public $eslBarCode;

    /**
     * @var string
     */
    public $fromDate;

    /**
     * @var string
     */
    public $itemBarCode;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var string
     */
    public $operateStatus;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var int
     */
    public $operateUserId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $reverse;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $storeId;

    /**
     * @var string
     */
    public $toDate;
    protected $_name = [
        'eslBarCode'    => 'EslBarCode',
        'fromDate'      => 'FromDate',
        'itemBarCode'   => 'ItemBarCode',
        'itemId'        => 'ItemId',
        'itemTitle'     => 'ItemTitle',
        'operateStatus' => 'OperateStatus',
        'operateType'   => 'OperateType',
        'operateUserId' => 'OperateUserId',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'reverse'       => 'Reverse',
        'storeId'       => 'StoreId',
        'toDate'        => 'ToDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eslBarCode) {
            $res['EslBarCode'] = $this->eslBarCode;
        }
        if (null !== $this->fromDate) {
            $res['FromDate'] = $this->fromDate;
        }
        if (null !== $this->itemBarCode) {
            $res['ItemBarCode'] = $this->itemBarCode;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->operateStatus) {
            $res['OperateStatus'] = $this->operateStatus;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->operateUserId) {
            $res['OperateUserId'] = $this->operateUserId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->toDate) {
            $res['ToDate'] = $this->toDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EslBarCode'])) {
            $model->eslBarCode = $map['EslBarCode'];
        }
        if (isset($map['FromDate'])) {
            $model->fromDate = $map['FromDate'];
        }
        if (isset($map['ItemBarCode'])) {
            $model->itemBarCode = $map['ItemBarCode'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['OperateStatus'])) {
            $model->operateStatus = $map['OperateStatus'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['OperateUserId'])) {
            $model->operateUserId = $map['OperateUserId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['ToDate'])) {
            $model->toDate = $map['ToDate'];
        }

        return $model;
    }
}
