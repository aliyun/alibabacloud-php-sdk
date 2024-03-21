<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class ListTrademarkApplicationsRequest extends Model
{
    /**
     * @var string
     */
    public $applicantName;

    /**
     * @example 0
     *
     * @var int
     */
    public $applicationStatus;

    /**
     * @example 1
     *
     * @var string
     */
    public $applicationType;

    /**
     * @example trademark_prepayment_pre-cn-12345678
     *
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $createTimeLeft;

    /**
     * @var int
     */
    public $createTimeRight;

    /**
     * @var int
     */
    public $flag;

    /**
     * @example 204469008550629
     *
     * @var string
     */
    public $orderId;

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
     * @var int
     */
    public $productType;

    /**
     * @var bool
     */
    public $queryVoucherOrderDoneFlag;

    /**
     * @var bool
     */
    public $queryVoucherOrderFlag;

    /**
     * @var string
     */
    public $sortFiled;

    /**
     * @example ASC
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @example 2
     *
     * @var int
     */
    public $supplementStatus;

    /**
     * @var string
     */
    public $trademarkName;

    /**
     * @example 12345678
     *
     * @var string
     */
    public $trademarkNumber;
    protected $_name = [
        'applicantName'             => 'ApplicantName',
        'applicationStatus'         => 'ApplicationStatus',
        'applicationType'           => 'ApplicationType',
        'bizId'                     => 'BizId',
        'createTimeLeft'            => 'CreateTimeLeft',
        'createTimeRight'           => 'CreateTimeRight',
        'flag'                      => 'Flag',
        'orderId'                   => 'OrderId',
        'pageNumber'                => 'PageNumber',
        'pageSize'                  => 'PageSize',
        'productType'               => 'ProductType',
        'queryVoucherOrderDoneFlag' => 'QueryVoucherOrderDoneFlag',
        'queryVoucherOrderFlag'     => 'QueryVoucherOrderFlag',
        'sortFiled'                 => 'SortFiled',
        'sortOrder'                 => 'SortOrder',
        'supplementStatus'          => 'SupplementStatus',
        'trademarkName'             => 'TrademarkName',
        'trademarkNumber'           => 'TrademarkNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicantName) {
            $res['ApplicantName'] = $this->applicantName;
        }
        if (null !== $this->applicationStatus) {
            $res['ApplicationStatus'] = $this->applicationStatus;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->createTimeLeft) {
            $res['CreateTimeLeft'] = $this->createTimeLeft;
        }
        if (null !== $this->createTimeRight) {
            $res['CreateTimeRight'] = $this->createTimeRight;
        }
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->queryVoucherOrderDoneFlag) {
            $res['QueryVoucherOrderDoneFlag'] = $this->queryVoucherOrderDoneFlag;
        }
        if (null !== $this->queryVoucherOrderFlag) {
            $res['QueryVoucherOrderFlag'] = $this->queryVoucherOrderFlag;
        }
        if (null !== $this->sortFiled) {
            $res['SortFiled'] = $this->sortFiled;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->supplementStatus) {
            $res['SupplementStatus'] = $this->supplementStatus;
        }
        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }
        if (null !== $this->trademarkNumber) {
            $res['TrademarkNumber'] = $this->trademarkNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrademarkApplicationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicantName'])) {
            $model->applicantName = $map['ApplicantName'];
        }
        if (isset($map['ApplicationStatus'])) {
            $model->applicationStatus = $map['ApplicationStatus'];
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CreateTimeLeft'])) {
            $model->createTimeLeft = $map['CreateTimeLeft'];
        }
        if (isset($map['CreateTimeRight'])) {
            $model->createTimeRight = $map['CreateTimeRight'];
        }
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['QueryVoucherOrderDoneFlag'])) {
            $model->queryVoucherOrderDoneFlag = $map['QueryVoucherOrderDoneFlag'];
        }
        if (isset($map['QueryVoucherOrderFlag'])) {
            $model->queryVoucherOrderFlag = $map['QueryVoucherOrderFlag'];
        }
        if (isset($map['SortFiled'])) {
            $model->sortFiled = $map['SortFiled'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['SupplementStatus'])) {
            $model->supplementStatus = $map['SupplementStatus'];
        }
        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }
        if (isset($map['TrademarkNumber'])) {
            $model->trademarkNumber = $map['TrademarkNumber'];
        }

        return $model;
    }
}
