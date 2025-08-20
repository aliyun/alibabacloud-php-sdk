<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackInstancesRequest\deploymentTargets;

class DeleteStackInstancesRequest extends Model
{
    /**
     * @var string[]
     */
    public $accountIds;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var deploymentTargets
     */
    public $deploymentTargets;

    /**
     * @var string
     */
    public $operationDescription;

    /**
     * @var mixed[]
     */
    public $operationPreferences;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $regionIds;

    /**
     * @var bool
     */
    public $retainStacks;

    /**
     * @var string
     */
    public $stackGroupName;
    protected $_name = [
        'accountIds' => 'AccountIds',
        'clientToken' => 'ClientToken',
        'deploymentTargets' => 'DeploymentTargets',
        'operationDescription' => 'OperationDescription',
        'operationPreferences' => 'OperationPreferences',
        'regionId' => 'RegionId',
        'regionIds' => 'RegionIds',
        'retainStacks' => 'RetainStacks',
        'stackGroupName' => 'StackGroupName',
    ];

    public function validate()
    {
        if (\is_array($this->accountIds)) {
            Model::validateArray($this->accountIds);
        }
        if (null !== $this->deploymentTargets) {
            $this->deploymentTargets->validate();
        }
        if (\is_array($this->operationPreferences)) {
            Model::validateArray($this->operationPreferences);
        }
        if (\is_array($this->regionIds)) {
            Model::validateArray($this->regionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIds) {
            if (\is_array($this->accountIds)) {
                $res['AccountIds'] = [];
                $n1 = 0;
                foreach ($this->accountIds as $item1) {
                    $res['AccountIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->deploymentTargets) {
            $res['DeploymentTargets'] = null !== $this->deploymentTargets ? $this->deploymentTargets->toArray($noStream) : $this->deploymentTargets;
        }

        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }

        if (null !== $this->operationPreferences) {
            if (\is_array($this->operationPreferences)) {
                $res['OperationPreferences'] = [];
                foreach ($this->operationPreferences as $key1 => $value1) {
                    $res['OperationPreferences'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->regionIds) {
            if (\is_array($this->regionIds)) {
                $res['RegionIds'] = [];
                $n1 = 0;
                foreach ($this->regionIds as $item1) {
                    $res['RegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->retainStacks) {
            $res['RetainStacks'] = $this->retainStacks;
        }

        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
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
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = [];
                $n1 = 0;
                foreach ($map['AccountIds'] as $item1) {
                    $model->accountIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DeploymentTargets'])) {
            $model->deploymentTargets = deploymentTargets::fromMap($map['DeploymentTargets']);
        }

        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }

        if (isset($map['OperationPreferences'])) {
            if (!empty($map['OperationPreferences'])) {
                $model->operationPreferences = [];
                foreach ($map['OperationPreferences'] as $key1 => $value1) {
                    $model->operationPreferences[$key1] = $value1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegionIds'])) {
            if (!empty($map['RegionIds'])) {
                $model->regionIds = [];
                $n1 = 0;
                foreach ($map['RegionIds'] as $item1) {
                    $model->regionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RetainStacks'])) {
            $model->retainStacks = $map['RetainStacks'];
        }

        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }

        return $model;
    }
}
