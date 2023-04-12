<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class ListOrderRequest extends Model
{
    /**
     * @var string
     */
    public $credentialNo;

    /**
     * @example 2022-04-05
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 21450******0275
     *
     * @var string
     */
    public $orderId;

    /**
     * @example processing
     *
     * @var string
     */
    public $orderStatus;

    /**
     * @example NEW
     *
     * @var string
     */
    public $orderType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 2022-04-05
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'credentialNo' => 'CredentialNo',
        'endDate'      => 'EndDate',
        'orderId'      => 'OrderId',
        'orderStatus'  => 'OrderStatus',
        'orderType'    => 'OrderType',
        'pageNo'       => 'PageNo',
        'pageSize'     => 'PageSize',
        'startDate'    => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialNo) {
            $res['CredentialNo'] = $this->credentialNo;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialNo'])) {
            $model->credentialNo = $map['CredentialNo'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
