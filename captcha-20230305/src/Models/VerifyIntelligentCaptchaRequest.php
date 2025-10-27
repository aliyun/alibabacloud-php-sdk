<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Captcha\V20230305\Models;

use AlibabaCloud\Dara\Model;

class VerifyIntelligentCaptchaRequest extends Model
{
    /**
     * @var string
     */
    public $captchaVerifyParam;

    /**
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'captchaVerifyParam' => 'CaptchaVerifyParam',
        'sceneId' => 'SceneId',
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

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
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

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
