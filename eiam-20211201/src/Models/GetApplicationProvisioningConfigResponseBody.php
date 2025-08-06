<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigResponseBody\applicationProvisioningConfig;

class GetApplicationProvisioningConfigResponseBody extends Model
{
    /**
     * @var applicationProvisioningConfig
     */
    public $applicationProvisioningConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationProvisioningConfig' => 'ApplicationProvisioningConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->applicationProvisioningConfig) {
            $this->applicationProvisioningConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationProvisioningConfig) {
            $res['ApplicationProvisioningConfig'] = null !== $this->applicationProvisioningConfig ? $this->applicationProvisioningConfig->toArray($noStream) : $this->applicationProvisioningConfig;
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
        if (isset($map['ApplicationProvisioningConfig'])) {
            $model->applicationProvisioningConfig = applicationProvisioningConfig::fromMap($map['ApplicationProvisioningConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
