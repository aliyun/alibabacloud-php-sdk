<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstallCodeRequest extends Model
{
    /**
     * @description The installation command.
     *
     * This parameter is required.
     * @example 1q****
     *
     * @var string
     */
    public $captchaCode;
    protected $_name = [
        'captchaCode' => 'CaptchaCode',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteInstallCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaptchaCode'])) {
            $model->captchaCode = $map['CaptchaCode'];
        }

        return $model;
    }
}
