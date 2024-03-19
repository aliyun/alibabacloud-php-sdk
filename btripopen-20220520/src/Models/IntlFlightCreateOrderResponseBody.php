<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightCreateOrderResponseBody\module;
use AlibabaCloud\Tea\Model;

class IntlFlightCreateOrderResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var module
     */
    public $module;

    /**
     * @example C61ECFF6-606B-5F66-B81D-D77369043A5F
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
     * @example 2103ad1116826479016562032da98c
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'httpStatusCode' => 'http_status_code',
        'module'         => 'module',
        'requestId'      => 'requestId',
        'resultCode'     => 'result_code',
        'resultMsg'      => 'result_msg',
        'success'        => 'success',
        'traceId'        => 'traceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpStatusCode) {
            $res['http_status_code'] = $this->httpStatusCode;
        }
        if (null !== $this->module) {
            $res['module'] = null !== $this->module ? $this->module->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return IntlFlightCreateOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['http_status_code'])) {
            $model->httpStatusCode = $map['http_status_code'];
        }
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
