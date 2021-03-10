<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaIpCityResponseBody\captchaCities;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaIpCityResponseBody\captchaIps;
use AlibabaCloud\Tea\Model;

class DescribeCaptchaIpCityResponseBody extends Model
{
    /**
     * @var captchaIps[]
     */
    public $captchaIps;

    /**
     * @var captchaCities[]
     */
    public $captchaCities;

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
        'captchaIps'    => 'CaptchaIps',
        'captchaCities' => 'CaptchaCities',
        'requestId'     => 'RequestId',
        'bizCode'       => 'BizCode',
        'hasData'       => 'HasData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->captchaIps) {
            $res['CaptchaIps'] = [];
            if (null !== $this->captchaIps && \is_array($this->captchaIps)) {
                $n = 0;
                foreach ($this->captchaIps as $item) {
                    $res['CaptchaIps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->captchaCities) {
            $res['CaptchaCities'] = [];
            if (null !== $this->captchaCities && \is_array($this->captchaCities)) {
                $n = 0;
                foreach ($this->captchaCities as $item) {
                    $res['CaptchaCities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeCaptchaIpCityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaptchaIps'])) {
            if (!empty($map['CaptchaIps'])) {
                $model->captchaIps = [];
                $n                 = 0;
                foreach ($map['CaptchaIps'] as $item) {
                    $model->captchaIps[$n++] = null !== $item ? captchaIps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CaptchaCities'])) {
            if (!empty($map['CaptchaCities'])) {
                $model->captchaCities = [];
                $n                    = 0;
                foreach ($map['CaptchaCities'] as $item) {
                    $model->captchaCities[$n++] = null !== $item ? captchaCities::fromMap($item) : $item;
                }
            }
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
