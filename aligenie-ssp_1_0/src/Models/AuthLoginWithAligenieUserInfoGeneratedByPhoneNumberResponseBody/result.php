<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AuthLoginWithAligenieUserInfoGeneratedByPhoneNumberResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $expiredTimeLong;

    /**
     * @var string
     */
    public $loginStateAccessToken;
    protected $_name = [
        'expiredTimeLong' => 'ExpiredTimeLong',
        'loginStateAccessToken' => 'LoginStateAccessToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiredTimeLong) {
            $res['ExpiredTimeLong'] = $this->expiredTimeLong;
        }

        if (null !== $this->loginStateAccessToken) {
            $res['LoginStateAccessToken'] = $this->loginStateAccessToken;
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
        if (isset($map['ExpiredTimeLong'])) {
            $model->expiredTimeLong = $map['ExpiredTimeLong'];
        }

        if (isset($map['LoginStateAccessToken'])) {
            $model->loginStateAccessToken = $map['LoginStateAccessToken'];
        }

        return $model;
    }
}
