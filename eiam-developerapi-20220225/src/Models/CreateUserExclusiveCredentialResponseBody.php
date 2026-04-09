<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class CreateUserExclusiveCredentialResponseBody extends Model
{
    /**
     * @var string
     */
    public $credentialId;

    /**
     * @var string
     */
    public $credentialIdentifier;
    protected $_name = [
        'credentialId' => 'credentialId',
        'credentialIdentifier' => 'credentialIdentifier',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialId) {
            $res['credentialId'] = $this->credentialId;
        }

        if (null !== $this->credentialIdentifier) {
            $res['credentialIdentifier'] = $this->credentialIdentifier;
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
        if (isset($map['credentialId'])) {
            $model->credentialId = $map['credentialId'];
        }

        if (isset($map['credentialIdentifier'])) {
            $model->credentialIdentifier = $map['credentialIdentifier'];
        }

        return $model;
    }
}
