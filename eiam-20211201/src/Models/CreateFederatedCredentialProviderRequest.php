<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateFederatedCredentialProviderRequest\oidcProviderConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateFederatedCredentialProviderRequest\pkcs7ProviderConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateFederatedCredentialProviderRequest\privateCaProviderConfig;

class CreateFederatedCredentialProviderRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $federatedCredentialProviderName;

    /**
     * @var string
     */
    public $federatedCredentialProviderType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $networkAccessEndpointId;

    /**
     * @var oidcProviderConfig
     */
    public $oidcProviderConfig;

    /**
     * @var pkcs7ProviderConfig
     */
    public $pkcs7ProviderConfig;

    /**
     * @var privateCaProviderConfig
     */
    public $privateCaProviderConfig;
    protected $_name = [
        'description' => 'Description',
        'federatedCredentialProviderName' => 'FederatedCredentialProviderName',
        'federatedCredentialProviderType' => 'FederatedCredentialProviderType',
        'instanceId' => 'InstanceId',
        'networkAccessEndpointId' => 'NetworkAccessEndpointId',
        'oidcProviderConfig' => 'OidcProviderConfig',
        'pkcs7ProviderConfig' => 'Pkcs7ProviderConfig',
        'privateCaProviderConfig' => 'PrivateCaProviderConfig',
    ];

    public function validate()
    {
        if (null !== $this->oidcProviderConfig) {
            $this->oidcProviderConfig->validate();
        }
        if (null !== $this->pkcs7ProviderConfig) {
            $this->pkcs7ProviderConfig->validate();
        }
        if (null !== $this->privateCaProviderConfig) {
            $this->privateCaProviderConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->federatedCredentialProviderName) {
            $res['FederatedCredentialProviderName'] = $this->federatedCredentialProviderName;
        }

        if (null !== $this->federatedCredentialProviderType) {
            $res['FederatedCredentialProviderType'] = $this->federatedCredentialProviderType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->networkAccessEndpointId) {
            $res['NetworkAccessEndpointId'] = $this->networkAccessEndpointId;
        }

        if (null !== $this->oidcProviderConfig) {
            $res['OidcProviderConfig'] = null !== $this->oidcProviderConfig ? $this->oidcProviderConfig->toArray($noStream) : $this->oidcProviderConfig;
        }

        if (null !== $this->pkcs7ProviderConfig) {
            $res['Pkcs7ProviderConfig'] = null !== $this->pkcs7ProviderConfig ? $this->pkcs7ProviderConfig->toArray($noStream) : $this->pkcs7ProviderConfig;
        }

        if (null !== $this->privateCaProviderConfig) {
            $res['PrivateCaProviderConfig'] = null !== $this->privateCaProviderConfig ? $this->privateCaProviderConfig->toArray($noStream) : $this->privateCaProviderConfig;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FederatedCredentialProviderName'])) {
            $model->federatedCredentialProviderName = $map['FederatedCredentialProviderName'];
        }

        if (isset($map['FederatedCredentialProviderType'])) {
            $model->federatedCredentialProviderType = $map['FederatedCredentialProviderType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NetworkAccessEndpointId'])) {
            $model->networkAccessEndpointId = $map['NetworkAccessEndpointId'];
        }

        if (isset($map['OidcProviderConfig'])) {
            $model->oidcProviderConfig = oidcProviderConfig::fromMap($map['OidcProviderConfig']);
        }

        if (isset($map['Pkcs7ProviderConfig'])) {
            $model->pkcs7ProviderConfig = pkcs7ProviderConfig::fromMap($map['Pkcs7ProviderConfig']);
        }

        if (isset($map['PrivateCaProviderConfig'])) {
            $model->privateCaProviderConfig = privateCaProviderConfig::fromMap($map['PrivateCaProviderConfig']);
        }

        return $model;
    }
}
