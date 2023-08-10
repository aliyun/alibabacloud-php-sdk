<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningScopeResponseBody\applicationProvisioningScope;
use AlibabaCloud\Tea\Model;

class GetApplicationProvisioningScopeResponseBody extends Model
{
    /**
     * @description The scope of account synchronization.
     *
     * @var applicationProvisioningScope
     */
    public $applicationProvisioningScope;

    /**
     * @description The ID of the request.
     *
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationProvisioningScope' => 'ApplicationProvisioningScope',
        'requestId'                    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationProvisioningScope) {
            $res['ApplicationProvisioningScope'] = null !== $this->applicationProvisioningScope ? $this->applicationProvisioningScope->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApplicationProvisioningScopeResponseBody
     */
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
