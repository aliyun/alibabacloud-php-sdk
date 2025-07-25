<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningConfigurationResponseBody\userProvisioningConfiguration;

class GetUserProvisioningConfigurationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userProvisioningConfiguration
     */
    public $userProvisioningConfiguration;
    protected $_name = [
        'requestId' => 'RequestId',
        'userProvisioningConfiguration' => 'UserProvisioningConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->userProvisioningConfiguration) {
            $this->userProvisioningConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userProvisioningConfiguration) {
            $res['UserProvisioningConfiguration'] = null !== $this->userProvisioningConfiguration ? $this->userProvisioningConfiguration->toArray($noStream) : $this->userProvisioningConfiguration;
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

        if (isset($map['UserProvisioningConfiguration'])) {
            $model->userProvisioningConfiguration = userProvisioningConfiguration::fromMap($map['UserProvisioningConfiguration']);
        }

        return $model;
    }
}
