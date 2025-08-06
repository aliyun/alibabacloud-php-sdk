<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningScopeResponseBody\applicationProvisioningScope;

class GetApplicationProvisioningScopeResponseBody extends Model
{
    /**
     * @var applicationProvisioningScope
     */
    public $applicationProvisioningScope;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationProvisioningScope' => 'ApplicationProvisioningScope',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->applicationProvisioningScope) {
            $this->applicationProvisioningScope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationProvisioningScope) {
            $res['ApplicationProvisioningScope'] = null !== $this->applicationProvisioningScope ? $this->applicationProvisioningScope->toArray($noStream) : $this->applicationProvisioningScope;
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
        if (isset($map['ApplicationProvisioningScope'])) {
            $model->applicationProvisioningScope = applicationProvisioningScope::fromMap($map['ApplicationProvisioningScope']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
