<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationFederatedCredentialRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationFederatedCredentialRequest\oidcVerificationConfig\azureVmConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationFederatedCredentialRequest\oidcVerificationConfig\gcpVmConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationFederatedCredentialRequest\oidcVerificationConfig\genericConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationFederatedCredentialRequest\oidcVerificationConfig\kubernetesConfig;

class oidcVerificationConfig extends Model
{
    /**
     * @var azureVmConfig
     */
    public $azureVmConfig;

    /**
     * @var gcpVmConfig
     */
    public $gcpVmConfig;

    /**
     * @var genericConfig
     */
    public $genericConfig;

    /**
     * @var kubernetesConfig
     */
    public $kubernetesConfig;

    /**
     * @var string
     */
    public $profile;
    protected $_name = [
        'azureVmConfig' => 'AzureVmConfig',
        'gcpVmConfig' => 'GcpVmConfig',
        'genericConfig' => 'GenericConfig',
        'kubernetesConfig' => 'KubernetesConfig',
        'profile' => 'Profile',
    ];

    public function validate()
    {
        if (null !== $this->azureVmConfig) {
            $this->azureVmConfig->validate();
        }
        if (null !== $this->gcpVmConfig) {
            $this->gcpVmConfig->validate();
        }
        if (null !== $this->genericConfig) {
            $this->genericConfig->validate();
        }
        if (null !== $this->kubernetesConfig) {
            $this->kubernetesConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->azureVmConfig) {
            $res['AzureVmConfig'] = null !== $this->azureVmConfig ? $this->azureVmConfig->toArray($noStream) : $this->azureVmConfig;
        }

        if (null !== $this->gcpVmConfig) {
            $res['GcpVmConfig'] = null !== $this->gcpVmConfig ? $this->gcpVmConfig->toArray($noStream) : $this->gcpVmConfig;
        }

        if (null !== $this->genericConfig) {
            $res['GenericConfig'] = null !== $this->genericConfig ? $this->genericConfig->toArray($noStream) : $this->genericConfig;
        }

        if (null !== $this->kubernetesConfig) {
            $res['KubernetesConfig'] = null !== $this->kubernetesConfig ? $this->kubernetesConfig->toArray($noStream) : $this->kubernetesConfig;
        }

        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
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
        if (isset($map['AzureVmConfig'])) {
            $model->azureVmConfig = azureVmConfig::fromMap($map['AzureVmConfig']);
        }

        if (isset($map['GcpVmConfig'])) {
            $model->gcpVmConfig = gcpVmConfig::fromMap($map['GcpVmConfig']);
        }

        if (isset($map['GenericConfig'])) {
            $model->genericConfig = genericConfig::fromMap($map['GenericConfig']);
        }

        if (isset($map['KubernetesConfig'])) {
            $model->kubernetesConfig = kubernetesConfig::fromMap($map['KubernetesConfig']);
        }

        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }

        return $model;
    }
}
