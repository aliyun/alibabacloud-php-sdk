<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;

class UnbindAligenieUserRequest extends Model
{
    /**
     * @var string
     */
    public $loginStateAccessToken;
    protected $_name = [
        'loginStateAccessToken' => 'LoginStateAccessToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['LoginStateAccessToken'])) {
            $model->loginStateAccessToken = $map['LoginStateAccessToken'];
        }

        return $model;
    }
}
