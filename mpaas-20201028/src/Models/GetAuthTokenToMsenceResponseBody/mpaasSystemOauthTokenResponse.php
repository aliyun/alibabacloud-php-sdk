<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetAuthTokenToMsenceResponseBody;

use AlibabaCloud\Dara\Model;

class mpaasSystemOauthTokenResponse extends Model
{
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $expiresIn;

    /**
     * @var string
     */
    public $openId;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'authToken' => 'AuthToken',
        'expiresIn' => 'ExpiresIn',
        'openId' => 'OpenId',
        'platform' => 'Platform',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['AuthToken'] = $this->authToken;
        }

        if (null !== $this->expiresIn) {
            $res['ExpiresIn'] = $this->expiresIn;
        }

        if (null !== $this->openId) {
            $res['OpenId'] = $this->openId;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AuthToken'])) {
            $model->authToken = $map['AuthToken'];
        }

        if (isset($map['ExpiresIn'])) {
            $model->expiresIn = $map['ExpiresIn'];
        }

        if (isset($map['OpenId'])) {
            $model->openId = $map['OpenId'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
