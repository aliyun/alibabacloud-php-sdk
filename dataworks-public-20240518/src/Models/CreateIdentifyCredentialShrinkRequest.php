<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateIdentifyCredentialShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $identifyCredentialShrink;
    protected $_name = [
        'identifyCredentialShrink' => 'IdentifyCredential',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identifyCredentialShrink) {
            $res['IdentifyCredential'] = $this->identifyCredentialShrink;
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
            $model->identifyCredentialShrink = $map['IdentifyCredential'];
        }

        return $model;
    }
}
