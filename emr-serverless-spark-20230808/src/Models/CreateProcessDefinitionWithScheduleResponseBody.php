<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateProcessDefinitionWithScheduleResponseBody\data;

class CreateProcessDefinitionWithScheduleResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var data
     */
    public $data;

    /**
     * @var string
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
     * @var string
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
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
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
            $model->data = data::fromMap($map['data']);
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
