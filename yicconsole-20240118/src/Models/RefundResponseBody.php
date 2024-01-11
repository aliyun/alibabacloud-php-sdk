<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\YicConsole\V20240118\Models;

use AlibabaCloud\Tea\Model;

class RefundResponseBody extends Model
{
    /**
     * @example AccessDeniedByRamPolicy, ReqId:63FC296B4330433600DD89BC
     *
     * @var string
     */
    public $message;

    /**
     * @example True
     *
     * @var bool
     */
    public $synchro;

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
    protected $_name = [
        'message'   => 'Message',
        'synchro'   => 'Synchro',
        'code'      => 'code',
        'data'      => 'data',
        'requestId' => 'requestId',
        'success'   => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->synchro) {
            $res['Synchro'] = $this->synchro;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefundResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Synchro'])) {
            $model->synchro = $map['Synchro'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
