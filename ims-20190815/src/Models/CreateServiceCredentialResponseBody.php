<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateServiceCredentialResponseBody\serviceCredential;

class CreateServiceCredentialResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceCredential
     */
    public $serviceCredential;
    protected $_name = [
        'requestId' => 'RequestId',
        'serviceCredential' => 'ServiceCredential',
    ];

    public function validate()
    {
        if (null !== $this->serviceCredential) {
            $this->serviceCredential->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceCredential) {
            $res['ServiceCredential'] = null !== $this->serviceCredential ? $this->serviceCredential->toArray($noStream) : $this->serviceCredential;
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

        if (isset($map['ServiceCredential'])) {
            $model->serviceCredential = serviceCredential::fromMap($map['ServiceCredential']);
        }

        return $model;
    }
}
