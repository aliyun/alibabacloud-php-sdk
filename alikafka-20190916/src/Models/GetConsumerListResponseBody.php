<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerListResponseBody\consumerList;
use AlibabaCloud\Tea\Model;

class GetConsumerListResponseBody extends Model
{
    /**
     * @description The HTTP status code returned. The HTTP status code 200 indicates that the request is successful.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The consumer groups.
     *
     * @var consumerList
     */
    public $consumerList;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @description The returned message.
     *
     * @example operation success.
     *
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 808F042B-CB9A-4FBC-9009-00E7DDB6****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'code'         => 'Code',
        'consumerList' => 'ConsumerList',
        'currentPage'  => 'CurrentPage',
        'message'      => 'Message',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'total'        => 'Total',
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
        if (null !== $this->consumerList) {
            $res['ConsumerList'] = null !== $this->consumerList ? $this->consumerList->toMap() : null;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConsumerListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConsumerList'])) {
            $model->consumerList = consumerList::fromMap($map['ConsumerList']);
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
