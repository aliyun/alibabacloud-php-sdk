<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module;

class IntlFlightOrderDetailResponseBody extends Model
{
    /**
     * @var module
     */
    public $module;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'module' => 'module',
        'requestId' => 'request_id',
        'resultCode' => 'result_code',
        'resultMsg' => 'result_msg',
        'success' => 'success',
        'traceId' => 'trace_id',
    ];

    public function validate()
    {
        if (null !== $this->module) {
            $this->module->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->module) {
            $res['module'] = null !== $this->module ? $this->module->toArray($noStream) : $this->module;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
