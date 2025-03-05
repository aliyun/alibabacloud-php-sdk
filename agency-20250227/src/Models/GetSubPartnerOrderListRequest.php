<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227\Models;

use AlibabaCloud\Dara\Model;

class GetSubPartnerOrderListRequest extends Model
{
    /**
     * @var int
     */
    public $orderCreateAfter;
    /**
     * @var int
     */
    public $orderCreateBefore;
    /**
     * @var int
     */
    public $orderId;
    /**
     * @var int
     */
    public $orderPayAfter;
    /**
     * @var int
     */
    public $orderPayBefore;
    /**
     * @var int
     */
    public $orderStatus;
    /**
     * @var string[]
     */
    public $orderTypeList;
    /**
     * @var int
     */
    public $pageNo;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $payAmountAfter;
    /**
     * @var int
     */
    public $payAmountBefore;
    /**
     * @var int
     */
    public $payType;
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var string
     */
    public $productName;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $subPartnerName;
    /**
     * @var int
     */
    public $subPartnerUid;
    protected $_name = [
        'orderCreateAfter'  => 'OrderCreateAfter',
        'orderCreateBefore' => 'OrderCreateBefore',
        'orderId'           => 'OrderId',
        'orderPayAfter'     => 'OrderPayAfter',
        'orderPayBefore'    => 'OrderPayBefore',
        'orderStatus'       => 'OrderStatus',
        'orderTypeList'     => 'OrderTypeList',
        'pageNo'            => 'PageNo',
        'pageSize'          => 'PageSize',
        'payAmountAfter'    => 'PayAmountAfter',
        'payAmountBefore'   => 'PayAmountBefore',
        'payType'           => 'PayType',
        'productCode'       => 'ProductCode',
        'productName'       => 'ProductName',
        'projectId'         => 'ProjectId',
        'subPartnerName'    => 'SubPartnerName',
        'subPartnerUid'     => 'SubPartnerUid',
    ];

    public function validate()
    {
        if (\is_array($this->orderTypeList)) {
            Model::validateArray($this->orderTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderCreateAfter) {
            $res['OrderCreateAfter'] = $this->orderCreateAfter;
        }

        if (null !== $this->orderCreateBefore) {
            $res['OrderCreateBefore'] = $this->orderCreateBefore;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->orderPayAfter) {
            $res['OrderPayAfter'] = $this->orderPayAfter;
        }

        if (null !== $this->orderPayBefore) {
            $res['OrderPayBefore'] = $this->orderPayBefore;
        }

        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }

        if (null !== $this->orderTypeList) {
            if (\is_array($this->orderTypeList)) {
                $res['OrderTypeList'] = [];
                $n1                   = 0;
                foreach ($this->orderTypeList as $item1) {
                    $res['OrderTypeList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->payAmountAfter) {
            $res['PayAmountAfter'] = $this->payAmountAfter;
        }

        if (null !== $this->payAmountBefore) {
            $res['PayAmountBefore'] = $this->payAmountBefore;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->subPartnerName) {
            $res['SubPartnerName'] = $this->subPartnerName;
        }

        if (null !== $this->subPartnerUid) {
            $res['SubPartnerUid'] = $this->subPartnerUid;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderCreateAfter'])) {
            $model->orderCreateAfter = $map['OrderCreateAfter'];
        }

        if (isset($map['OrderCreateBefore'])) {
            $model->orderCreateBefore = $map['OrderCreateBefore'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OrderPayAfter'])) {
            $model->orderPayAfter = $map['OrderPayAfter'];
        }

        if (isset($map['OrderPayBefore'])) {
            $model->orderPayBefore = $map['OrderPayBefore'];
        }

        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }

        if (isset($map['OrderTypeList'])) {
            if (!empty($map['OrderTypeList'])) {
                $model->orderTypeList = [];
                $n1                   = 0;
                foreach ($map['OrderTypeList'] as $item1) {
                    $model->orderTypeList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PayAmountAfter'])) {
            $model->payAmountAfter = $map['PayAmountAfter'];
        }

        if (isset($map['PayAmountBefore'])) {
            $model->payAmountBefore = $map['PayAmountBefore'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SubPartnerName'])) {
            $model->subPartnerName = $map['SubPartnerName'];
        }

        if (isset($map['SubPartnerUid'])) {
            $model->subPartnerUid = $map['SubPartnerUid'];
        }

        return $model;
    }
}
