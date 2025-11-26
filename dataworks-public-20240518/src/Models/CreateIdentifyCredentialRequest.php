<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateIdentifyCredentialRequest extends Model
{
    /**
     * @var IdentifyCredential
     */
    public $identifyCredential;
    protected $_name = [
        'identifyCredential' => 'IdentifyCredential',
    ];

    public function validate()
    {
        if (null !== $this->identifyCredential) {
            $this->identifyCredential->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identifyCredential) {
            $res['IdentifyCredential'] = null !== $this->identifyCredential ? $this->identifyCredential->toArray($noStream) : $this->identifyCredential;
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
        if (isset($map['IdentifyCredential'])) {
            $model->identifyCredential = IdentifyCredential::fromMap($map['IdentifyCredential']);
        }

        return $model;
    }
}
