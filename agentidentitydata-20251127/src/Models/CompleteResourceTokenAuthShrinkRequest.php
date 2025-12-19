<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentityData\V20251127\Models;

use AlibabaCloud\Dara\Model;

class CompleteResourceTokenAuthShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $sessionURI;

    /**
     * @var string
     */
    public $userIdentifierShrink;
    protected $_name = [
        'sessionURI' => 'SessionURI',
        'userIdentifierShrink' => 'UserIdentifier',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionURI) {
            $res['SessionURI'] = $this->sessionURI;
        }

        if (null !== $this->userIdentifierShrink) {
            $res['UserIdentifier'] = $this->userIdentifierShrink;
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
            $model->userIdentifierShrink = $map['UserIdentifier'];
        }

        return $model;
    }
}
