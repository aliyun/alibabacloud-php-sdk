<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class RefreshTokenRequest extends Model
{
    /**
     * @example 600
     *
     * @var int
     */
    public $accessTokenExpirationTime;

    /**
     * @example eyJ***************.eyJ******************.KUT****************
     *
     * @var string
     */
    public $ticket;
    protected $_name = [
        'accessTokenExpirationTime' => 'accessTokenExpirationTime',
        'ticket'                    => 'ticket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessTokenExpirationTime) {
            $res['accessTokenExpirationTime'] = $this->accessTokenExpirationTime;
        }
        if (null !== $this->ticket) {
            $res['ticket'] = $this->ticket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessTokenExpirationTime'])) {
            $model->accessTokenExpirationTime = $map['accessTokenExpirationTime'];
        }
        if (isset($map['ticket'])) {
            $model->ticket = $map['ticket'];
        }

        return $model;
    }
}
