<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetTokenVaultResponseBody\tokenVault;

class GetTokenVaultResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tokenVault
     */
    public $tokenVault;
    protected $_name = [
        'requestId' => 'RequestId',
        'tokenVault' => 'TokenVault',
    ];

    public function validate()
    {
        if (null !== $this->tokenVault) {
            $this->tokenVault->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tokenVault) {
            $res['TokenVault'] = null !== $this->tokenVault ? $this->tokenVault->toArray($noStream) : $this->tokenVault;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TokenVault'])) {
            $model->tokenVault = tokenVault::fromMap($map['TokenVault']);
        }

        return $model;
    }
}
