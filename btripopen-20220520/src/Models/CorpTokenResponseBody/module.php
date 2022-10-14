<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CorpTokenResponseBody;

use AlibabaCloud\Tea\Model;

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
        'start'  => 'start',
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
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
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
