<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationFederatedCredentialRequest\attributeMappings;

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
     * @var string
     */
    public $verificationCondition;
    protected $_name = [
        'applicationFederatedCredentialName' => 'ApplicationFederatedCredentialName',
        'applicationFederatedCredentialType' => 'ApplicationFederatedCredentialType',
        'applicationId' => 'ApplicationId',
        'attributeMappings' => 'AttributeMappings',
        'description' => 'Description',
        'federatedCredentialProviderId' => 'FederatedCredentialProviderId',
        'instanceId' => 'InstanceId',
        'verificationCondition' => 'VerificationCondition',
    ];

    public function validate()
    {
        if (\is_array($this->attributeMappings)) {
            Model::validateArray($this->attributeMappings);
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

        if (null !== $this->verificationCondition) {
            $res['VerificationCondition'] = $this->verificationCondition;
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

        if (isset($map['VerificationCondition'])) {
            $model->verificationCondition = $map['VerificationCondition'];
        }

        return $model;
    }
}
