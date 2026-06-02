<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\GetOrCreateInvitationCodeResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authCode;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $expired;
    protected $_name = [
        'authCode' => 'AuthCode',
        'expireTime' => 'ExpireTime',
        'expired' => 'Expired',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
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
        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        return $model;
    }
}
