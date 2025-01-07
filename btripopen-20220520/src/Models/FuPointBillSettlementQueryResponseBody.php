<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FuPointBillSettlementQueryResponseBody\module;
use AlibabaCloud\Tea\Model;

class FuPointBillSettlementQueryResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var int
     */
    public $code;

    /**
     * @description module。
     *
     * @var module
     */
    public $module;

    /**
     * @example true
     *
     * @var bool
     */
    public $morePage;

    /**
     * @example 210bc22017109867047728291dd406
     *
     * @var string
     */
    public $requestId;

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
     * @description trace_id
     *
     * @example 213e382517240341253056547e41fc
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'code'      => 'code',
        'module'    => 'module',
        'morePage'  => 'more_page',
        'requestId' => 'requestId',
        'resultMsg' => 'result_msg',
        'success'   => 'success',
        'traceId'   => 'traceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->module) {
            $res['module'] = null !== $this->module ? $this->module->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return FuPointBillSettlementQueryResponseBody
     */
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
