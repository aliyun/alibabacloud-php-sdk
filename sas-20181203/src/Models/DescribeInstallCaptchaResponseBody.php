<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstallCaptchaResponseBody extends Model
{
    /**
     * @var int
     */
    public $deadline;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $captchaCode;
    protected $_name = [
        'deadline'    => 'Deadline',
        'requestId'   => 'RequestId',
        'captchaCode' => 'CaptchaCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deadline) {
            $res['Deadline'] = $this->deadline;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->captchaCode) {
            $res['CaptchaCode'] = $this->captchaCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstallCaptchaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Deadline'])) {
            $model->deadline = $map['Deadline'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CaptchaCode'])) {
            $model->captchaCode = $map['CaptchaCode'];
        }

        return $model;
    }
}
