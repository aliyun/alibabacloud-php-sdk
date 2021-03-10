<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaDayResponseBody\captchaDay;
use AlibabaCloud\Tea\Model;

class DescribeCaptchaDayResponseBody extends Model
{
    /**
     * @var captchaDay
     */
    public $captchaDay;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var bool
     */
    public $hasData;
    protected $_name = [
        'captchaDay' => 'CaptchaDay',
        'requestId'  => 'RequestId',
        'bizCode'    => 'BizCode',
        'hasData'    => 'HasData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->captchaDay) {
            $res['CaptchaDay'] = null !== $this->captchaDay ? $this->captchaDay->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->hasData) {
            $res['HasData'] = $this->hasData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCaptchaDayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaptchaDay'])) {
            $model->captchaDay = captchaDay::fromMap($map['CaptchaDay']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['HasData'])) {
            $model->hasData = $map['HasData'];
        }

        return $model;
    }
}
