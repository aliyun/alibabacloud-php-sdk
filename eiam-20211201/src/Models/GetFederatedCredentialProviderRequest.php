<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class GetFederatedCredentialProviderRequest extends Model
{
    /**
     * @var string
     */
    public $federatedCredentialProviderId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'federatedCredentialProviderId' => 'FederatedCredentialProviderId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->federatedCredentialProviderId) {
            $res['FederatedCredentialProviderId'] = $this->federatedCredentialProviderId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['FederatedCredentialProviderId'])) {
            $model->federatedCredentialProviderId = $map['FederatedCredentialProviderId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
