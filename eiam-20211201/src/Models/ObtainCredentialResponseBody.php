<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainCredentialResponseBody\credential;

class ObtainCredentialResponseBody extends Model
{
    /**
     * @var credential
     */
    public $credential;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'credential' => 'Credential',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->credential) {
            $this->credential->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credential) {
            $res['Credential'] = null !== $this->credential ? $this->credential->toArray($noStream) : $this->credential;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Credential'])) {
            $model->credential = credential::fromMap($map['Credential']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
