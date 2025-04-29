<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\AccessTokenResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $expire;

    /**
     * @var int
     */
    public $start;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'expire' => 'expire',
        'start' => 'start',
        'token' => 'token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expire) {
            $res['expire'] = $this->expire;
        }

        if (null !== $this->start) {
            $res['start'] = $this->start;
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
        if (isset($map['expire'])) {
            $model->expire = $map['expire'];
        }

        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
