<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class ValidateExpressSyncConfigResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example false
     *
     * @var bool
     */
    public $isValid;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example 943856D2-814B-487A-B645-D5F9CCA15929
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example ConflictExpressSyncConfig
     *
     * @var string
     */
    public $validateMessage;
    protected $_name = [
        'code'            => 'Code',
        'isValid'         => 'IsValid',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
        'validateMessage' => 'ValidateMessage',
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
        if (null !== $this->isValid) {
            $res['IsValid'] = $this->isValid;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->validateMessage) {
            $res['ValidateMessage'] = $this->validateMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateExpressSyncConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsValid'])) {
            $model->isValid = $map['IsValid'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ValidateMessage'])) {
            $model->validateMessage = $map['ValidateMessage'];
        }

        return $model;
    }
}
