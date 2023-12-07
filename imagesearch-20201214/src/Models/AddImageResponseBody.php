<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\SDK\ImageSearch\V20201214\Models\AddImageResponseBody\picInfo;
use AlibabaCloud\Tea\Model;

class AddImageResponseBody extends Model
{
    /**
     * @description The code returned.
     *
     *   A value of 0 indicates that the request was successful.
     *   Values other than 0 indicate that the request failed.
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The error message returned if the request failed.
     *
     * > No value is returned if the request was successful, and an error message is returned if the request failed.
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The results of category prediction and subject identification.
     *
     * @var picInfo
     */
    public $picInfo;

    /**
     * @description The request ID.
     *
     * @example E0845DE6-52AF-4B50-9F15-51ED4044E6AB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'picInfo'   => 'PicInfo',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->picInfo) {
            $res['PicInfo'] = null !== $this->picInfo ? $this->picInfo->toMap() : null;
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
     * @return AddImageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PicInfo'])) {
            $model->picInfo = picInfo::fromMap($map['PicInfo']);
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
