<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GenerateOauthTokenResponseBody;

use AlibabaCloud\Dara\Model;

class tokenResponse extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var int
     */
    public $expiresAt;

    /**
     * @var int
     */
    public $expiresIn;

    /**
     * @var string
     */
    public $tokenType;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'expiresAt' => 'ExpiresAt',
        'expiresIn' => 'ExpiresIn',
        'tokenType' => 'TokenType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }

        if (null !== $this->expiresAt) {
            $res['ExpiresAt'] = $this->expiresAt;
        }

        if (null !== $this->expiresIn) {
            $res['ExpiresIn'] = $this->expiresIn;
        }

        if (null !== $this->tokenType) {
            $res['TokenType'] = $this->tokenType;
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
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }

        if (isset($map['ExpiresAt'])) {
            $model->expiresAt = $map['ExpiresAt'];
        }

        if (isset($map['ExpiresIn'])) {
            $model->expiresIn = $map['ExpiresIn'];
        }

        if (isset($map['TokenType'])) {
            $model->tokenType = $map['TokenType'];
        }

        return $model;
    }
}
