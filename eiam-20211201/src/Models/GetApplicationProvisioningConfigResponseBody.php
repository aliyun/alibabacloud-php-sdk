<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigResponseBody\applicationProvisioningConfig;
use AlibabaCloud\Tea\Model;

class GetApplicationProvisioningConfigResponseBody extends Model
{
    /**
     * @description The configuration of the account synchronization feature for the application.
     *
     * @var applicationProvisioningConfig
     */
    public $applicationProvisioningConfig;

    /**
     * @description The ID of the request.
     *
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationProvisioningConfig' => 'ApplicationProvisioningConfig',
        'requestId'                     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationProvisioningConfig) {
            $res['ApplicationProvisioningConfig'] = null !== $this->applicationProvisioningConfig ? $this->applicationProvisioningConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApplicationProvisioningConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationProvisioningConfig'])) {
            $model->applicationProvisioningConfig = applicationProvisioningConfig::fromMap($map['ApplicationProvisioningConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
