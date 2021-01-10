<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListResponseBody\lmOrderList;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListResponseBody\postFee;
use AlibabaCloud\Tea\Model;

class QueryOrderListResponseBody extends Model
{
    /**
     * @var postFee
     */
    public $postFee;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var lmOrderList
     */
    public $lmOrderList;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'postFee'     => 'PostFee',
        'totalCount'  => 'TotalCount',
        'requestId'   => 'RequestId',
        'message'     => 'Message',
        'pageSize'    => 'PageSize',
        'pageNumber'  => 'PageNumber',
        'lmOrderList' => 'LmOrderList',
        'code'        => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->postFee) {
            $res['PostFee'] = null !== $this->postFee ? $this->postFee->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->lmOrderList) {
            $res['LmOrderList'] = null !== $this->lmOrderList ? $this->lmOrderList->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrderListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PostFee'])) {
            $model->postFee = postFee::fromMap($map['PostFee']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['LmOrderList'])) {
            $model->lmOrderList = lmOrderList::fromMap($map['LmOrderList']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
