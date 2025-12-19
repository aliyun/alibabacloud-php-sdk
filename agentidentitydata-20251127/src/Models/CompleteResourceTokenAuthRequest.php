<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentityData\V20251127\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\CompleteResourceTokenAuthRequest\userIdentifier;

class CompleteResourceTokenAuthRequest extends Model
{
    /**
     * @var string
     */
    public $sessionURI;

    /**
     * @var userIdentifier
     */
    public $userIdentifier;
    protected $_name = [
        'sessionURI' => 'SessionURI',
        'userIdentifier' => 'UserIdentifier',
    ];

    public function validate()
    {
        if (null !== $this->userIdentifier) {
            $this->userIdentifier->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionURI) {
            $res['SessionURI'] = $this->sessionURI;
        }

        if (null !== $this->userIdentifier) {
            $res['UserIdentifier'] = null !== $this->userIdentifier ? $this->userIdentifier->toArray($noStream) : $this->userIdentifier;
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
        if (isset($map['SessionURI'])) {
            $model->sessionURI = $map['SessionURI'];
        }

        if (isset($map['UserIdentifier'])) {
            $model->userIdentifier = userIdentifier::fromMap($map['UserIdentifier']);
        }

        return $model;
    }
}
