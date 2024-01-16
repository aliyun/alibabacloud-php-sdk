<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateTokenResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1705388704855
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @example 1813ceee-7fe5-41b4-87e5-982a4d18cca5
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
