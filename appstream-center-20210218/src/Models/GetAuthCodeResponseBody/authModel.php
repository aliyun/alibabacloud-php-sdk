<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetAuthCodeResponseBody;

use AlibabaCloud\Dara\Model;

class authModel extends Model
{
    /**
     * @var string
     */
    public $authCode;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $expireTime;
    protected $_name = [
        'authCode' => 'AuthCode',
        'endUserId' => 'EndUserId',
        'expireTime' => 'ExpireTime',
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

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
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

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        return $model;
    }
}
