<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Captcha\V20230305\Models;

use AlibabaCloud\Tea\Model;

class VerifyIntelligentCaptchaRequest extends Model
{
    /**
     * @example dsjidsjidsjkds*djsjdiskds
     *
     * @var string
     */
    public $captchaVerifyParam;
    protected $_name = [
        'captchaVerifyParam' => 'CaptchaVerifyParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->captchaVerifyParam) {
            $res['CaptchaVerifyParam'] = $this->captchaVerifyParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyIntelligentCaptchaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaptchaVerifyParam'])) {
            $model->captchaVerifyParam = $map['CaptchaVerifyParam'];
        }

        return $model;
    }
}
