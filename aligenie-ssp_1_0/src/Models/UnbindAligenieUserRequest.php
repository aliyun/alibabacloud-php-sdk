<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class UnbindAligenieUserRequest extends Model
{
    /**
     * @example 99ce8a70c23a94f8569e1a525bef6e85
     *
     * @var string
     */
    public $loginStateAccessToken;
    protected $_name = [
        'loginStateAccessToken' => 'LoginStateAccessToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginStateAccessToken) {
            $res['LoginStateAccessToken'] = $this->loginStateAccessToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindAligenieUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginStateAccessToken'])) {
            $model->loginStateAccessToken = $map['LoginStateAccessToken'];
        }

        return $model;
    }
}
