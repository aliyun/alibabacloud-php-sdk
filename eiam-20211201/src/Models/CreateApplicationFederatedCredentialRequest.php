<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationFederatedCredentialRequest\attributeMappings;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationFederatedCredentialRequest\oidcVerificationConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationFederatedCredentialRequest\pkcs7VerificationConfig;

class CreateApplicationFederatedCredentialRequest extends Model
{
    /**
     * @var string
     */
    public $applicationFederatedCredentialName;

    /**
     * @var string
     */
    public $applicationFederatedCredentialType;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var attributeMappings[]
     */
    public $attributeMappings;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $federatedCredentialProviderId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var oidcVerificationConfig
     */
    public $oidcVerificationConfig;

    /**
     * @var pkcs7VerificationConfig
     */
    public $pkcs7VerificationConfig;

    /**
     * @var string
     */
    public $verificationCondition;

    /**
     * @var string
     */
    public $verificationMode;
    protected $_name = [
        'applicationFederatedCredentialName' => 'ApplicationFederatedCredentialName',
        'applicationFederatedCredentialType' => 'ApplicationFederatedCredentialType',
        'applicationId' => 'ApplicationId',
        'attributeMappings' => 'AttributeMappings',
        'description' => 'Description',
        'federatedCredentialProviderId' => 'FederatedCredentialProviderId',
        'instanceId' => 'InstanceId',
        'oidcVerificationConfig' => 'OidcVerificationConfig',
        'pkcs7VerificationConfig' => 'Pkcs7VerificationConfig',
        'verificationCondition' => 'VerificationCondition',
        'verificationMode' => 'VerificationMode',
    ];

    public function validate()
    {
        if (\is_array($this->attributeMappings)) {
            Model::validateArray($this->attributeMappings);
        }
        if (null !== $this->oidcVerificationConfig) {
            $this->oidcVerificationConfig->validate();
        }
        if (null !== $this->pkcs7VerificationConfig) {
            $this->pkcs7VerificationConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationFederatedCredentialName) {
            $res['ApplicationFederatedCredentialName'] = $this->applicationFederatedCredentialName;
        }

        if (null !== $this->applicationFederatedCredentialType) {
            $res['ApplicationFederatedCredentialType'] = $this->applicationFederatedCredentialType;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->attributeMappings) {
            if (\is_array($this->attributeMappings)) {
                $res['AttributeMappings'] = [];
                $n1 = 0;
                foreach ($this->attributeMappings as $item1) {
                    $res['AttributeMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->federatedCredentialProviderId) {
            $res['FederatedCredentialProviderId'] = $this->federatedCredentialProviderId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->oidcVerificationConfig) {
            $res['OidcVerificationConfig'] = null !== $this->oidcVerificationConfig ? $this->oidcVerificationConfig->toArray($noStream) : $this->oidcVerificationConfig;
        }

        if (null !== $this->pkcs7VerificationConfig) {
            $res['Pkcs7VerificationConfig'] = null !== $this->pkcs7VerificationConfig ? $this->pkcs7VerificationConfig->toArray($noStream) : $this->pkcs7VerificationConfig;
        }

        if (null !== $this->verificationCondition) {
            $res['VerificationCondition'] = $this->verificationCondition;
        }

        if (null !== $this->verificationMode) {
            $res['VerificationMode'] = $this->verificationMode;
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
        if (isset($map['ApplicationFederatedCredentialName'])) {
            $model->applicationFederatedCredentialName = $map['ApplicationFederatedCredentialName'];
        }

        if (isset($map['ApplicationFederatedCredentialType'])) {
            $model->applicationFederatedCredentialType = $map['ApplicationFederatedCredentialType'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['AttributeMappings'])) {
            if (!empty($map['AttributeMappings'])) {
                $model->attributeMappings = [];
                $n1 = 0;
                foreach ($map['AttributeMappings'] as $item1) {
                    $model->attributeMappings[$n1] = attributeMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FederatedCredentialProviderId'])) {
            $model->federatedCredentialProviderId = $map['FederatedCredentialProviderId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OidcVerificationConfig'])) {
            $model->oidcVerificationConfig = oidcVerificationConfig::fromMap($map['OidcVerificationConfig']);
        }

        if (isset($map['Pkcs7VerificationConfig'])) {
            $model->pkcs7VerificationConfig = pkcs7VerificationConfig::fromMap($map['Pkcs7VerificationConfig']);
        }

        if (isset($map['VerificationCondition'])) {
            $model->verificationCondition = $map['VerificationCondition'];
        }

        if (isset($map['VerificationMode'])) {
            $model->verificationMode = $map['VerificationMode'];
        }

        return $model;
    }
}
