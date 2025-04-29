<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FuPointBillSettlementQueryResponseBody\module;

class FuPointBillSettlementQueryResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var module
     */
    public $module;

    /**
     * @var bool
     */
    public $morePage;

    /**
     * @var string
     */
    public $requestId;

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
        'code' => 'code',
        'module' => 'module',
        'morePage' => 'more_page',
        'requestId' => 'requestId',
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
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->module) {
            $res['module'] = null !== $this->module ? $this->module->toArray($noStream) : $this->module;
        }

        if (null !== $this->morePage) {
            $res['more_page'] = $this->morePage;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['module'])) {
            $model->module = module::fromMap($map['module']);
        }

        if (isset($map['more_page'])) {
            $model->morePage = $map['more_page'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
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
