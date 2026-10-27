<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\TransferResourcesOutofGroupRequest\resources;

class TransferResourcesOutofGroupRequest extends Model
{
    /**
     * @var string
     */
    public $appRuleId;

    /**
     * @var string
     */
    public $businessChannel;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var resources[]
     */
    public $resources;

    /**
     * @var string
     */
    public $targetResourceGroupId;

    /**
     * @var string
     */
    public $timerId;
    protected $_name = [
        'appRuleId' => 'AppRuleId',
        'businessChannel' => 'BusinessChannel',
        'platform' => 'Platform',
        'policyId' => 'PolicyId',
        'resourceGroupId' => 'ResourceGroupId',
        'resources' => 'Resources',
        'targetResourceGroupId' => 'TargetResourceGroupId',
        'timerId' => 'TimerId',
    ];

    public function validate()
    {
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appRuleId) {
            $res['AppRuleId'] = $this->appRuleId;
        }

        if (null !== $this->businessChannel) {
            $res['BusinessChannel'] = $this->businessChannel;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['Resources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetResourceGroupId) {
            $res['TargetResourceGroupId'] = $this->targetResourceGroupId;
        }

        if (null !== $this->timerId) {
            $res['TimerId'] = $this->timerId;
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
        if (isset($map['AppRuleId'])) {
            $model->appRuleId = $map['AppRuleId'];
        }

        if (isset($map['BusinessChannel'])) {
            $model->businessChannel = $map['BusinessChannel'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['Resources'] as $item1) {
                    $model->resources[$n1] = resources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TargetResourceGroupId'])) {
            $model->targetResourceGroupId = $map['TargetResourceGroupId'];
        }

        if (isset($map['TimerId'])) {
            $model->timerId = $map['TimerId'];
        }

        return $model;
    }
}
