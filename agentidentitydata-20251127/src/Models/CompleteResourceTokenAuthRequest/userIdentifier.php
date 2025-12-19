<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\CompleteResourceTokenAuthRequest;

use AlibabaCloud\Dara\Model;

class userIdentifier extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userJWT;
    protected $_name = [
        'userId' => 'UserId',
        'userJWT' => 'UserJWT',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userJWT) {
            $res['UserJWT'] = $this->userJWT;
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserJWT'])) {
            $model->userJWT = $map['UserJWT'];
        }

        return $model;
    }
}
