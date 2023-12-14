<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class CheckMnsServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $checkMessage;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isEnabled;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'checkMessage' => 'CheckMessage',
        'code'         => 'Code',
        'isEnabled'    => 'IsEnabled',
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkMessage) {
            $res['CheckMessage'] = $this->checkMessage;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckMnsServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckMessage'])) {
            $model->checkMessage = $map['CheckMessage'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
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

        return $model;
    }
}
