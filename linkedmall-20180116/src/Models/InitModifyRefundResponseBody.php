<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitModifyRefundResponseBody\initApplyRefundData;
use AlibabaCloud\Tea\Model;

class InitModifyRefundResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @var initApplyRefundData
     */
    public $initApplyRefundData;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @example E090F1A0-7****454-5F36-933C-E6332CE2
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 23******85
     *
     * @var string
     */
    public $subLmOrderId;
    protected $_name = [
        'code'                => 'Code',
        'initApplyRefundData' => 'InitApplyRefundData',
        'message'             => 'Message',
        'requestId'           => 'RequestId',
        'subLmOrderId'        => 'SubLmOrderId',
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
        if (null !== $this->initApplyRefundData) {
            $res['InitApplyRefundData'] = null !== $this->initApplyRefundData ? $this->initApplyRefundData->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subLmOrderId) {
            $res['SubLmOrderId'] = $this->subLmOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitModifyRefundResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['InitApplyRefundData'])) {
            $model->initApplyRefundData = initApplyRefundData::fromMap($map['InitApplyRefundData']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubLmOrderId'])) {
            $model->subLmOrderId = $map['SubLmOrderId'];
        }

        return $model;
    }
}
