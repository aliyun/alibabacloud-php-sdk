<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserLogRequest extends Model
{
    /**
     * @example 18bc5a63****
     *
     * @var string
     */
    public $eslBarCode;

    /**
     * @example {}
     *
     * @var string
     */
    public $extraParams;

    /**
     * @example 2020-03-18T02:26:28Z
     *
     * @var string
     */
    public $fromDate;

    /**
     * @example 690560583****
     *
     * @var string
     */
    public $itemBarCode;

    /**
     * @var string
     */
    public $itemShortTitle;

    /**
     * @example 123456
     *
     * @var string
     */
    public $logId;

    /**
     * @example OPERATION_STATUS_NEW
     *
     * @var string
     */
    public $operationStatus;

    /**
     * @example OPERATION_TYPE_BIND
     *
     * @var string
     */
    public $operationType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example s-dxsxx****
     *
     * @var string
     */
    public $storeId;

    /**
     * @example 2020-03-17T02:26:28Z
     *
     * @var string
     */
    public $toDate;

    /**
     * @example 134****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'eslBarCode'      => 'EslBarCode',
        'extraParams'     => 'ExtraParams',
        'fromDate'        => 'FromDate',
        'itemBarCode'     => 'ItemBarCode',
        'itemShortTitle'  => 'ItemShortTitle',
        'logId'           => 'LogId',
        'operationStatus' => 'OperationStatus',
        'operationType'   => 'OperationType',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'storeId'         => 'StoreId',
        'toDate'          => 'ToDate',
        'userId'          => 'UserId',
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
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
        }
        if (null !== $this->fromDate) {
            $res['FromDate'] = $this->fromDate;
        }
        if (null !== $this->itemBarCode) {
            $res['ItemBarCode'] = $this->itemBarCode;
        }
        if (null !== $this->itemShortTitle) {
            $res['ItemShortTitle'] = $this->itemShortTitle;
        }
        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
        }
        if (null !== $this->operationStatus) {
            $res['OperationStatus'] = $this->operationStatus;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->toDate) {
            $res['ToDate'] = $this->toDate;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
        }
        if (isset($map['FromDate'])) {
            $model->fromDate = $map['FromDate'];
        }
        if (isset($map['ItemBarCode'])) {
            $model->itemBarCode = $map['ItemBarCode'];
        }
        if (isset($map['ItemShortTitle'])) {
            $model->itemShortTitle = $map['ItemShortTitle'];
        }
        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
        }
        if (isset($map['OperationStatus'])) {
            $model->operationStatus = $map['OperationStatus'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['ToDate'])) {
            $model->toDate = $map['ToDate'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
