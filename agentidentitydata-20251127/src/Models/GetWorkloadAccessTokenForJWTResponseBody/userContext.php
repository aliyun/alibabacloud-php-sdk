<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\GetWorkloadAccessTokenForJWTResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\GetWorkloadAccessTokenForJWTResponseBody\userContext\jwtClaims;

class userContext extends Model
{
    /**
     * @var jwtClaims
     */
    public $jwtClaims;
    protected $_name = [
        'jwtClaims' => 'JwtClaims',
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

        return $model;
    }
}
