<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationFederatedCredentialRequest\attributeMappings;

class UpdateApplicationFederatedCredentialRequest extends Model
{
    /**
     * @var string
     */
    public $applicationFederatedCredentialId;

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
    public $instanceId;

    /**
     * @var string
     */
    public $verificationCondition;
    protected $_name = [
        'applicationFederatedCredentialId' => 'ApplicationFederatedCredentialId',
        'applicationId' => 'ApplicationId',
        'attributeMappings' => 'AttributeMappings',
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
        if (null !== $this->applicationFederatedCredentialId) {
            $res['ApplicationFederatedCredentialId'] = $this->applicationFederatedCredentialId;
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
        if (isset($map['ApplicationFederatedCredentialId'])) {
            $model->applicationFederatedCredentialId = $map['ApplicationFederatedCredentialId'];
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['VerificationCondition'])) {
            $model->verificationCondition = $map['VerificationCondition'];
        }

        return $model;
    }
}
