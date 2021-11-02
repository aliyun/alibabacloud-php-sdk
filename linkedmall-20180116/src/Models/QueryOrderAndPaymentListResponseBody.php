<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListResponseBody\lmOrderList;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListResponseBody\postFee;
use AlibabaCloud\Tea\Model;

class QueryOrderAndPaymentListResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var lmOrderList
     */
    public $lmOrderList;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var postFee
     */
    public $postFee;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code'        => 'Code',
        'lmOrderList' => 'LmOrderList',
        'message'     => 'Message',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'postFee'     => 'PostFee',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->lmOrderList) {
            $res['LmOrderList'] = null !== $this->lmOrderList ? $this->lmOrderList->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->postFee) {
            $res['PostFee'] = null !== $this->postFee ? $this->postFee->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrderAndPaymentListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LmOrderList'])) {
            $model->lmOrderList = lmOrderList::fromMap($map['LmOrderList']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PostFee'])) {
            $model->postFee = postFee::fromMap($map['PostFee']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
