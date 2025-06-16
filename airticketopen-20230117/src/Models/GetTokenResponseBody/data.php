<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GetTokenResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $generateTime;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'expireTime' => 'expire_time',
        'generateTime' => 'generate_time',
        'token' => 'token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['expire_time'] = $this->expireTime;
        }

        if (null !== $this->generateTime) {
            $res['generate_time'] = $this->generateTime;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
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
        if (isset($map['expire_time'])) {
            $model->expireTime = $map['expire_time'];
        }

        if (isset($map['generate_time'])) {
            $model->generateTime = $map['generate_time'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
