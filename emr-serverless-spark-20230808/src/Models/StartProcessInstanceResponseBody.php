<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class StartProcessInstanceResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var mixed
     */
    public $data;

    /**
     * @var bool
     */
    public $failed;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'code',
        'data' => 'data',
        'failed' => 'failed',
        'httpStatusCode' => 'httpStatusCode',
        'msg' => 'msg',
        'requestId' => 'requestId',
        'success' => 'success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        if (null !== $this->failed) {
            $res['failed'] = $this->failed;
        }

        if (null !== $this->httpStatusCode) {
            $res['httpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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

        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        if (isset($map['failed'])) {
            $model->failed = $map['failed'];
        }

        if (isset($map['httpStatusCode'])) {
            $model->httpStatusCode = $map['httpStatusCode'];
        }

        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
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
