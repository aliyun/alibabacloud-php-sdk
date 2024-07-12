<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Tea\Model;

class BusinessResultServiceRequest extends Model
{
    /**
     * @var string
     */
    public $actionCode;

    /**
     * @var string
     */
    public $bussinessCode;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $result;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'actionCode'    => 'ActionCode',
        'bussinessCode' => 'BussinessCode',
        'errCode'       => 'ErrCode',
        'errMessage'    => 'ErrMessage',
        'requestId'     => 'RequestId',
        'result'        => 'Result',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionCode) {
            $res['ActionCode'] = $this->actionCode;
        }
        if (null !== $this->bussinessCode) {
            $res['BussinessCode'] = $this->bussinessCode;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BusinessResultServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionCode'])) {
            $model->actionCode = $map['ActionCode'];
        }
        if (isset($map['BussinessCode'])) {
            $model->bussinessCode = $map['BussinessCode'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
