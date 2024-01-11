<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\YicConsole\V20240118\Models;

use AlibabaCloud\Tea\Model;

class CheckPayOrderResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example {}
     *
     * @var string
     */
    public $data;

    /**
     * @example error
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example 63E17775-CA89-59DD-A8C0-FA26753A9556
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @example True
     *
     * @var bool
     */
    public $synchro;
    protected $_name = [
        'code'      => 'code',
        'data'      => 'data',
        'message'   => 'message',
        'requestId' => 'requestId',
        'success'   => 'success',
        'synchro'   => 'synchro',
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
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->synchro) {
            $res['synchro'] = $this->synchro;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckPayOrderResponseBody
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['synchro'])) {
            $model->synchro = $map['synchro'];
        }

        return $model;
    }
}
