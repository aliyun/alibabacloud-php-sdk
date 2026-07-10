<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationFederatedCredentialRequest\oidcVerificationConfig;

use AlibabaCloud\Dara\Model;

class azureVmConfig extends Model
{
    /**
     * @var string
     */
    public $principalId;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var string
     */
    public $subscriptionId;

    /**
     * @var string[]
     */
    public $vmNames;
    protected $_name = [
        'principalId' => 'PrincipalId',
        'resourceGroupName' => 'ResourceGroupName',
        'subscriptionId' => 'SubscriptionId',
        'vmNames' => 'VmNames',
    ];

    public function validate()
    {
        if (\is_array($this->vmNames)) {
            Model::validateArray($this->vmNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->principalId) {
            $res['PrincipalId'] = $this->principalId;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        if (null !== $this->subscriptionId) {
            $res['SubscriptionId'] = $this->subscriptionId;
        }

        if (null !== $this->vmNames) {
            if (\is_array($this->vmNames)) {
                $res['VmNames'] = [];
                $n1 = 0;
                foreach ($this->vmNames as $item1) {
                    $res['VmNames'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PrincipalId'])) {
            $model->principalId = $map['PrincipalId'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        if (isset($map['SubscriptionId'])) {
            $model->subscriptionId = $map['SubscriptionId'];
        }

        if (isset($map['VmNames'])) {
            if (!empty($map['VmNames'])) {
                $model->vmNames = [];
                $n1 = 0;
                foreach ($map['VmNames'] as $item1) {
                    $model->vmNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
