<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210622\Models;

use AlibabaCloud\Tea\Model;

class GetUserByTokenRequest extends Model
{
    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'token' => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserByTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
