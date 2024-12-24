<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleResponseBody\data;
use AlibabaCloud\Tea\Model;

class UpdateProcessDefinitionWithScheduleResponseBody extends Model
{
    /**
     * @example 1400009
     *
     * @var int
     */
    public $code;

    /**
     * @var data
     */
    public $data;

    /**
     * @example false
     *
     * @var string
     */
    public $failed;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example No permission for resource action
     *
     * @var string
     */
    public $msg;

    /**
     * @description Id of the request
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'           => 'code',
        'data'           => 'data',
        'failed'         => 'failed',
        'httpStatusCode' => 'httpStatusCode',
        'msg'            => 'msg',
        'requestId'      => 'requestId',
        'success'        => 'success',
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
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return UpdateProcessDefinitionWithScheduleResponseBody
     */
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
