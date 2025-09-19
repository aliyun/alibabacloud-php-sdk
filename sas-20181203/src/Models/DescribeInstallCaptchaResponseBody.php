<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeInstallCaptchaResponseBody extends Model
{
    /**
     * @var string
     */
    public $captchaCode;

    /**
     * @var string
     */
    public $deadline;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'captchaCode' => 'CaptchaCode',
        'deadline' => 'Deadline',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->captchaCode) {
            $res['CaptchaCode'] = $this->captchaCode;
        }

        if (null !== $this->deadline) {
            $res['Deadline'] = $this->deadline;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CaptchaCode'])) {
            $model->captchaCode = $map['CaptchaCode'];
        }

        if (isset($map['Deadline'])) {
            $model->deadline = $map['Deadline'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
