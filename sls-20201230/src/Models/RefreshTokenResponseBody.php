<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class RefreshTokenResponseBody extends Model
{
    /**
     * @example eyJ***************.eyJ******************.KUT****************
     *
     * @var string
     */
    public $accessToken;
    protected $_name = [
        'accessToken' => 'accessToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }

        return $model;
    }
}
