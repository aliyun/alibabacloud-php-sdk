<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySendFailDetailsNewResponseBody\list_;

class QuerySendFailDetailsNewResponseBody extends Model
{
    /**
     * @var string
     */
    public $applyDateStr;

    /**
     * @var int
     */
    public $billCount;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var string
     */
    public $innerErrCode;

    /**
     * @var list_
     */
    public $list;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $smsLength;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'applyDateStr' => 'ApplyDateStr',
        'billCount' => 'BillCount',
        'bizType' => 'BizType',
        'innerErrCode' => 'InnerErrCode',
        'list' => 'List',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'smsLength' => 'SmsLength',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (null !== $this->list) {
            $this->list->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyDateStr) {
            $res['ApplyDateStr'] = $this->applyDateStr;
        }

        if (null !== $this->billCount) {
            $res['BillCount'] = $this->billCount;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->innerErrCode) {
            $res['InnerErrCode'] = $this->innerErrCode;
        }

        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toArray($noStream) : $this->list;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->smsLength) {
            $res['SmsLength'] = $this->smsLength;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['ApplyDateStr'])) {
            $model->applyDateStr = $map['ApplyDateStr'];
        }

        if (isset($map['BillCount'])) {
            $model->billCount = $map['BillCount'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['InnerErrCode'])) {
            $model->innerErrCode = $map['InnerErrCode'];
        }

        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SmsLength'])) {
            $model->smsLength = $map['SmsLength'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
