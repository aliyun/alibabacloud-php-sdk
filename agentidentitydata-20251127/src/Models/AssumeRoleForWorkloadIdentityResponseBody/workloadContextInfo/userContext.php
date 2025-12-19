<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\AssumeRoleForWorkloadIdentityResponseBody\workloadContextInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\AssumeRoleForWorkloadIdentityResponseBody\workloadContextInfo\userContext\jwtClaims;

class userContext extends Model
{
    /**
     * @var jwtClaims
     */
    public $jwtClaims;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'jwtClaims' => 'JwtClaims',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->jwtClaims) {
            $this->jwtClaims->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jwtClaims) {
            $res['JwtClaims'] = null !== $this->jwtClaims ? $this->jwtClaims->toArray($noStream) : $this->jwtClaims;
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
        if (isset($map['JwtClaims'])) {
            $model->jwtClaims = jwtClaims::fromMap($map['JwtClaims']);
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
