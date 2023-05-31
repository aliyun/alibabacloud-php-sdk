<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstallCaptchaResponseBody extends Model
{
    /**
     * @description The installation verification code for you to manually install the Security Center agent.
     *
     * @example M1HH**
     *
     * @var string
     */
    public $captchaCode;

    /**
     * @description The validity period of the installation verification code.
     *
     * >  The installation verification code is valid only within the validity period. An expired installation verification code cannot be used to install the agent.
     * @example 2020-10-10 16:06:38
     *
     * @var string
     */
    public $deadline;

    /**
     * @description The ID of the request.
     *
     * @example 4E5BFDCF-B9DD-430D-9DA4-151BCB581C9D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'captchaCode' => 'CaptchaCode',
        'deadline'    => 'Deadline',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeInstallCaptchaResponseBody
     */
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
