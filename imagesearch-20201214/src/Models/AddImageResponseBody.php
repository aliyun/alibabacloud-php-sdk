<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\AddImageResponseBody\picInfo;

class AddImageResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;
    /**
     * @var string
     */
    public $message;
    /**
     * @var picInfo
     */
    public $picInfo;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->picInfo) {
            $this->picInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->picInfo) {
            $res['PicInfo'] = null !== $this->picInfo ? $this->picInfo->toArray($noStream) : $this->picInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
