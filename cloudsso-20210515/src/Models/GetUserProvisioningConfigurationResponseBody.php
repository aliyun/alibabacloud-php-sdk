<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningConfigurationResponseBody\userProvisioningConfiguration;
use AlibabaCloud\Tea\Model;

class GetUserProvisioningConfigurationResponseBody extends Model
{
    /**
     * @example 66898413-EB80-556D-9429-06FE3548F672
     *
     * @var string
     */
    public $requestId;

    /**
     * @var userProvisioningConfiguration
     */
    public $userProvisioningConfiguration;
    protected $_name = [
        'requestId'                     => 'RequestId',
        'userProvisioningConfiguration' => 'UserProvisioningConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userProvisioningConfiguration) {
            $res['UserProvisioningConfiguration'] = null !== $this->userProvisioningConfiguration ? $this->userProvisioningConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserProvisioningConfigurationResponseBody
     */
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
