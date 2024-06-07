<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CancelPickUpWaybillResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The error code.
     *
     * @example none
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example none
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The cancellation result.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the cancellation was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMsg'  => 'ErrorMsg',
        'message'   => 'Message',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
