<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\InitModifyRefund4DistributionResponseBody\model_;
use AlibabaCloud\Tea\Model;

class InitModifyRefund4DistributionResponseBody extends Model
{
    /**
     * @example 0000
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
     * @var model_
     */
    public $model;

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
     * @example 75F3A591-B1A6-5EFF-8ABF-35AB8804DFA0
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
     * @example 1004
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
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code'       => 'Code',
        'logsId'     => 'LogsId',
        'message'    => 'Message',
        'model'      => 'Model',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'subCode'    => 'SubCode',
        'subMessage' => 'SubMessage',
        'success'    => 'Success',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->logsId) {
            $res['LogsId'] = $this->logsId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->model) {
            $res['Model'] = null !== $this->model ? $this->model->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return InitModifyRefund4DistributionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LogsId'])) {
            $model->logsId = $map['LogsId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Model'])) {
            $model->model = model_::fromMap($map['Model']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
