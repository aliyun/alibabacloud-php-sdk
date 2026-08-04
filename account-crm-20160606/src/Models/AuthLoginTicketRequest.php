<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class AuthLoginTicketRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $authCode;

    /**
     * @var string
     */
    public $minorAuthCode;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'appName' => 'AppName',
        'authCode' => 'AuthCode',
        'minorAuthCode' => 'MinorAuthCode',
        'scene' => 'Scene',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }

        if (null !== $this->minorAuthCode) {
            $res['MinorAuthCode'] = $this->minorAuthCode;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }

        if (isset($map['MinorAuthCode'])) {
            $model->minorAuthCode = $map['MinorAuthCode'];
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        return $model;
    }
}
