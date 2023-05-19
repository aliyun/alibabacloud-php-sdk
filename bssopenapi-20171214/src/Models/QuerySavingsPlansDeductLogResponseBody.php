<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansDeductLogResponseBody\data;
use AlibabaCloud\Tea\Model;

class QuerySavingsPlansDeductLogResponseBody extends Model
{
    /**
     * @description The number of entries returned per page.
     *
     * @example PARAM_ERROR
     *
     * @var string
     */
    public $code;

    /**
     * @description The type of the savings plan. Valid values:
     *
     *   universal: general-purpose
     *   ecs: ECS compute
     *
     * @var data
     */
    public $data;

    /**
     * @description The ID of the savings plan instance.
     *
     * @var string
     */
    public $message;

    /**
     * @description The deduction details.
     *
     * @example 61293E7A-3406-4447-8620-EC88B0AA66AD
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The return data.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySavingsPlansDeductLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
