<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserProvisioningConfigurationResponseBody\userProvisioningConfiguration;
use AlibabaCloud\Tea\Model;

class UpdateUserProvisioningConfigurationResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example BBC2ED1D-FAC5-3DF8-B63C-992B85B08DD9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The global configurations of the RAM user provisioning.
     *
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
     * @return UpdateUserProvisioningConfigurationResponseBody
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
