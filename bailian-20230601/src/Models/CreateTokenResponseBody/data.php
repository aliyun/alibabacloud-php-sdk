<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models\CreateTokenResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1664177985651
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @example 89158587dfb7d85a335f98de4966d840
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'expiredTime' => 'ExpiredTime',
        'token'       => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
