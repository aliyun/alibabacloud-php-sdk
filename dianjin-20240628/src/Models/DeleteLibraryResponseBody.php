<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Tea\Model;

class DeleteLibraryResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $errCode;

    /**
     * @example ok
     *
     * @var string
     */
    public $message;

    /**
     * @example 30F6AD44-F078-540D-B5A5-1E519C8E9E6D
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
    protected $_name = [
        'errCode'   => 'errCode',
        'message'   => 'message',
        'requestId' => 'requestId',
        'success'   => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errCode) {
            $res['errCode'] = $this->errCode;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLibraryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errCode'])) {
            $model->errCode = $map['errCode'];
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

        return $model;
    }
}
