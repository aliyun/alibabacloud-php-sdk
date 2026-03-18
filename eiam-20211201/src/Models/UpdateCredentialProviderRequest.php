<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCredentialProviderRequest\credentialProviderConfig;

class UpdateCredentialProviderRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var credentialProviderConfig
     */
    public $credentialProviderConfig;

    /**
     * @var string
     */
    public $credentialProviderId;

    /**
     * @var string
     */
    public $credentialProviderName;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'credentialProviderConfig' => 'CredentialProviderConfig',
        'credentialProviderId' => 'CredentialProviderId',
        'credentialProviderName' => 'CredentialProviderName',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (null !== $this->credentialProviderConfig) {
            $this->credentialProviderConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->credentialProviderConfig) {
            $res['CredentialProviderConfig'] = null !== $this->credentialProviderConfig ? $this->credentialProviderConfig->toArray($noStream) : $this->credentialProviderConfig;
        }

        if (null !== $this->credentialProviderId) {
            $res['CredentialProviderId'] = $this->credentialProviderId;
        }

        if (null !== $this->credentialProviderName) {
            $res['CredentialProviderName'] = $this->credentialProviderName;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CredentialProviderConfig'])) {
            $model->credentialProviderConfig = credentialProviderConfig::fromMap($map['CredentialProviderConfig']);
        }

        if (isset($map['CredentialProviderId'])) {
            $model->credentialProviderId = $map['CredentialProviderId'];
        }

        if (isset($map['CredentialProviderName'])) {
            $model->credentialProviderName = $map['CredentialProviderName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
