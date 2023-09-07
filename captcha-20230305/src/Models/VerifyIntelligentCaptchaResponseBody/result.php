<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Captcha\V20230305\Models\VerifyIntelligentCaptchaResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $verifyResult;
    protected $_name = [
        'verifyResult' => 'VerifyResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = $this->verifyResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }

        return $model;
    }
}
