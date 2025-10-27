<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Captcha\V20230305\Models;

use AlibabaCloud\Dara\Model;

class VerifyCaptchaRequest extends Model
{
    /**
     * @var string
     */
    public $captchaVerifyParam;
    protected $_name = [
        'captchaVerifyParam' => 'CaptchaVerifyParam',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->captchaVerifyParam) {
            $res['CaptchaVerifyParam'] = $this->captchaVerifyParam;
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
        if (isset($map['CaptchaVerifyParam'])) {
            $model->captchaVerifyParam = $map['CaptchaVerifyParam'];
        }

        return $model;
    }
}
