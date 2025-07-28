<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Tea\Model;

class CreateDemandPlanResponseBody extends Model
{
    /**
     * @description code
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @example 111223
     *
     * @var int
     */
    public $data;

    /**
     * @example msg
     *
     * @var string
     */
    public $message;

    /**
     * @description success
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description traceId
     *
     * @example 1e2b798516402440016572132e1459
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'code' => 'code',
        'data' => 'data',
        'message' => 'message',
        'success' => 'success',
        'traceId' => 'traceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDemandPlanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }

        return $model;
    }
}
