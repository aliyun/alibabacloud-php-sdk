<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeUserLogResponseBody;

use AlibabaCloud\Tea\Model;

class userLogs extends Model
{
    /**
     * @example 500
     *
     * @var string
     */
    public $actionPrice;

    /**
     * @example false
     *
     * @var bool
     */
    public $bePromotion;

    /**
     * @example 18bc5a63****
     *
     * @var string
     */
    public $eslBarCode;

    /**
     * @example 50
     *
     * @var int
     */
    public $eslSignal;

    /**
     * @example 2020-03-17T02:26:17Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2020-03-17T02:26:17Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $i18nResultKey;

    /**
     * @example 690560583****
     *
     * @var string
     */
    public $itemBarCode;

    /**
     * @example 123456
     *
     * @var string
     */
    public $itemId;

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
     * @example 2020-03-17T02:26:17Z
     *
     * @var string
     */
    public $operationResponseTime;

    /**
     * @example 2020-03-17T02:25:17Z
     *
     * @var string
     */
    public $operationSendTime;

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
     * @var string
     */
    public $priceUnit;

    /**
     * @example 2002
     *
     * @var string
     */
    public $resultCode;

    /**
     * @example 10
     *
     * @var string
     */
    public $spendTime;

    /**
     * @example s-dxsxxx****
     *
     * @var string
     */
    public $storeId;

    /**
     * @example 134****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'actionPrice'           => 'ActionPrice',
        'bePromotion'           => 'BePromotion',
        'eslBarCode'            => 'EslBarCode',
        'eslSignal'             => 'EslSignal',
        'gmtCreate'             => 'GmtCreate',
        'gmtModified'           => 'GmtModified',
        'i18nResultKey'         => 'I18nResultKey',
        'itemBarCode'           => 'ItemBarCode',
        'itemId'                => 'ItemId',
        'itemShortTitle'        => 'ItemShortTitle',
        'logId'                 => 'LogId',
        'operationResponseTime' => 'OperationResponseTime',
        'operationSendTime'     => 'OperationSendTime',
        'operationStatus'       => 'OperationStatus',
        'operationType'         => 'OperationType',
        'priceUnit'             => 'PriceUnit',
        'resultCode'            => 'ResultCode',
        'spendTime'             => 'SpendTime',
        'storeId'               => 'StoreId',
        'userId'                => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionPrice) {
            $res['ActionPrice'] = $this->actionPrice;
        }
        if (null !== $this->bePromotion) {
            $res['BePromotion'] = $this->bePromotion;
        }
        if (null !== $this->eslBarCode) {
            $res['EslBarCode'] = $this->eslBarCode;
        }
        if (null !== $this->eslSignal) {
            $res['EslSignal'] = $this->eslSignal;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->i18nResultKey) {
            $res['I18nResultKey'] = $this->i18nResultKey;
        }
        if (null !== $this->itemBarCode) {
            $res['ItemBarCode'] = $this->itemBarCode;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemShortTitle) {
            $res['ItemShortTitle'] = $this->itemShortTitle;
        }
        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
        }
        if (null !== $this->operationResponseTime) {
            $res['OperationResponseTime'] = $this->operationResponseTime;
        }
        if (null !== $this->operationSendTime) {
            $res['OperationSendTime'] = $this->operationSendTime;
        }
        if (null !== $this->operationStatus) {
            $res['OperationStatus'] = $this->operationStatus;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->spendTime) {
            $res['SpendTime'] = $this->spendTime;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionPrice'])) {
            $model->actionPrice = $map['ActionPrice'];
        }
        if (isset($map['BePromotion'])) {
            $model->bePromotion = $map['BePromotion'];
        }
        if (isset($map['EslBarCode'])) {
            $model->eslBarCode = $map['EslBarCode'];
        }
        if (isset($map['EslSignal'])) {
            $model->eslSignal = $map['EslSignal'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['I18nResultKey'])) {
            $model->i18nResultKey = $map['I18nResultKey'];
        }
        if (isset($map['ItemBarCode'])) {
            $model->itemBarCode = $map['ItemBarCode'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemShortTitle'])) {
            $model->itemShortTitle = $map['ItemShortTitle'];
        }
        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
        }
        if (isset($map['OperationResponseTime'])) {
            $model->operationResponseTime = $map['OperationResponseTime'];
        }
        if (isset($map['OperationSendTime'])) {
            $model->operationSendTime = $map['OperationSendTime'];
        }
        if (isset($map['OperationStatus'])) {
            $model->operationStatus = $map['OperationStatus'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['SpendTime'])) {
            $model->spendTime = $map['SpendTime'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
