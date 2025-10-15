<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationFederatedCredentialResponseBody\applicationFederatedCredential;

class GetApplicationFederatedCredentialResponseBody extends Model
{
    /**
     * @var applicationFederatedCredential
     */
    public $applicationFederatedCredential;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationFederatedCredential' => 'ApplicationFederatedCredential',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->applicationFederatedCredential) {
            $this->applicationFederatedCredential->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationFederatedCredential) {
            $res['ApplicationFederatedCredential'] = null !== $this->applicationFederatedCredential ? $this->applicationFederatedCredential->toArray($noStream) : $this->applicationFederatedCredential;
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
        if (isset($map['ApplicationFederatedCredential'])) {
            $model->applicationFederatedCredential = applicationFederatedCredential::fromMap($map['ApplicationFederatedCredential']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
