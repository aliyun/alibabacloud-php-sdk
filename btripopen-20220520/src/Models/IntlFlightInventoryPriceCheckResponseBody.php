<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckResponseBody\module;

class IntlFlightInventoryPriceCheckResponseBody extends Model
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
        'requestId' => 'requestId',
        'resultCode' => 'result_code',
        'resultMsg' => 'result_msg',
        'success' => 'success',
        'traceId' => 'traceId',
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
            $res['requestId'] = $this->requestId;
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
            $res['traceId'] = $this->traceId;
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

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
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

        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }

        return $model;
    }
}
