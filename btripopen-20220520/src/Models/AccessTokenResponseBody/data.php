<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\AccessTokenResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 过期时间，单位ms
     *
     * @var int
     */
    public $expire;

    /**
     * @description 令牌
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'expire' => 'expire',
        'token'  => 'token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expire) {
            $res['expire'] = $this->expire;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expire'])) {
            $model->expire = $map['expire'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
