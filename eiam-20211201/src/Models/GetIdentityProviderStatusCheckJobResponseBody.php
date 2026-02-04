<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderStatusCheckJobResponseBody\identityProviderStatusCheckJob;

class GetIdentityProviderStatusCheckJobResponseBody extends Model
{
    /**
     * @var identityProviderStatusCheckJob
     */
    public $identityProviderStatusCheckJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'identityProviderStatusCheckJob' => 'IdentityProviderStatusCheckJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->identityProviderStatusCheckJob) {
            $this->identityProviderStatusCheckJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identityProviderStatusCheckJob) {
            $res['IdentityProviderStatusCheckJob'] = null !== $this->identityProviderStatusCheckJob ? $this->identityProviderStatusCheckJob->toArray($noStream) : $this->identityProviderStatusCheckJob;
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
        if (isset($map['IdentityProviderStatusCheckJob'])) {
            $model->identityProviderStatusCheckJob = identityProviderStatusCheckJob::fromMap($map['IdentityProviderStatusCheckJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
