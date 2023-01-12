<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class CreateOrderTransactionDetailFileResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $bizViewData;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @example 1
     *
     * @var string
     */
    public $logsId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example ORDER-92d3f9b1afa04172ac27710706fd398f
     *
     * @var string
     */
    public $recordId;

    /**
     * @example E090F1A0-7454-5F36-933C-E6332CE2****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1004
     *
     * @var string
     */
    public $subCode;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $subMessage;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 19
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'bizViewData' => 'BizViewData',
        'code'        => 'Code',
        'logsId'      => 'LogsId',
        'message'     => 'Message',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'recordId'    => 'RecordId',
        'requestId'   => 'RequestId',
        'subCode'     => 'SubCode',
        'subMessage'  => 'SubMessage',
        'success'     => 'Success',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizViewData) {
            $res['BizViewData'] = $this->bizViewData;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->logsId) {
            $res['LogsId'] = $this->logsId;
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
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }
        if (null !== $this->subMessage) {
            $res['SubMessage'] = $this->subMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrderTransactionDetailFileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizViewData'])) {
            $model->bizViewData = $map['BizViewData'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LogsId'])) {
            $model->logsId = $map['LogsId'];
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
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }
        if (isset($map['SubMessage'])) {
            $model->subMessage = $map['SubMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
