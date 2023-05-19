<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dop\V20221130\Models;

use AlibabaCloud\Tea\Model;

class SubmitBackfill4ApiResponseBody extends Model
{
    /**
     * @description code
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description data
     *
     * @example 数据结果
     *
     * @var string
     */
    public $data;

    /**
     * @example SysErr
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example 系统错误
     *
     * @var string
     */
    public $msg;

    /**
     * @description requestId
     *
     * @example 2131048516722814109054848e9249
     *
     * @var string
     */
    public $requestId;

    /**
     * @description success
     *
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @example BizErr.411
     *
     * @var string
     */
    public $dyCode;

    /**
     * @var string
     */
    public $dyMessage;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'errorCode' => 'ErrorCode',
        'msg'       => 'Msg',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'dyCode'    => 'dyCode',
        'dyMessage' => 'dyMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->dyCode) {
            $res['dyCode'] = $this->dyCode;
        }
        if (null !== $this->dyMessage) {
            $res['dyMessage'] = $this->dyMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitBackfill4ApiResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['dyCode'])) {
            $model->dyCode = $map['dyCode'];
        }
        if (isset($map['dyMessage'])) {
            $model->dyMessage = $map['dyMessage'];
        }

        return $model;
    }
}
