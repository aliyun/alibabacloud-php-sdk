<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module;
use AlibabaCloud\Tea\Model;

class IntlFlightOrderDetailResponseBody extends Model
{
    /**
     * @var module
     */
    public $module;

    /**
     * @example A3F8DCAB-8301-5770-BD9F-71B0BF9E1A6E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0
     *
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 21041ce316577904808056433edbb2
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'module'     => 'module',
        'requestId'  => 'request_id',
        'resultCode' => 'result_code',
        'resultMsg'  => 'result_msg',
        'success'    => 'success',
        'traceId'    => 'trace_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->module) {
            $res['module'] = null !== $this->module ? $this->module->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->traceId) {
            $res['trace_id'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IntlFlightOrderDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['module'])) {
            $model->module = module::fromMap($map['module']);
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['trace_id'])) {
            $model->traceId = $map['trace_id'];
        }

        return $model;
    }
}
