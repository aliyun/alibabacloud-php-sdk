<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackInstancesRequest\deploymentTargets;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackInstancesRequest\parameterOverrides;

class CreateStackInstancesRequest extends Model
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
     * @var string[]
     */
    public $deploymentOptions;

    /**
     * @var deploymentTargets
     */
    public $deploymentTargets;

    /**
     * @var bool
     */
    public $disableRollback;

    /**
     * @var string
     */
    public $operationDescription;

    /**
     * @var mixed[]
     */
    public $operationPreferences;

    /**
     * @var parameterOverrides[]
     */
    public $parameterOverrides;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $regionIds;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var int
     */
    public $timeoutInMinutes;
    protected $_name = [
        'accountIds' => 'AccountIds',
        'clientToken' => 'ClientToken',
        'deploymentOptions' => 'DeploymentOptions',
        'deploymentTargets' => 'DeploymentTargets',
        'disableRollback' => 'DisableRollback',
        'operationDescription' => 'OperationDescription',
        'operationPreferences' => 'OperationPreferences',
        'parameterOverrides' => 'ParameterOverrides',
        'regionId' => 'RegionId',
        'regionIds' => 'RegionIds',
        'stackGroupName' => 'StackGroupName',
        'timeoutInMinutes' => 'TimeoutInMinutes',
    ];

    public function validate()
    {
        if (\is_array($this->accountIds)) {
            Model::validateArray($this->accountIds);
        }
        if (\is_array($this->deploymentOptions)) {
            Model::validateArray($this->deploymentOptions);
        }
        if (null !== $this->deploymentTargets) {
            $this->deploymentTargets->validate();
        }
        if (\is_array($this->operationPreferences)) {
            Model::validateArray($this->operationPreferences);
        }
        if (\is_array($this->parameterOverrides)) {
            Model::validateArray($this->parameterOverrides);
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
                    $res['AccountIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->deploymentOptions) {
            if (\is_array($this->deploymentOptions)) {
                $res['DeploymentOptions'] = [];
                $n1 = 0;
                foreach ($this->deploymentOptions as $item1) {
                    $res['DeploymentOptions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->deploymentTargets) {
            $res['DeploymentTargets'] = null !== $this->deploymentTargets ? $this->deploymentTargets->toArray($noStream) : $this->deploymentTargets;
        }

        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
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

        if (null !== $this->parameterOverrides) {
            if (\is_array($this->parameterOverrides)) {
                $res['ParameterOverrides'] = [];
                $n1 = 0;
                foreach ($this->parameterOverrides as $item1) {
                    $res['ParameterOverrides'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                    $res['RegionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }

        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
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
                    $model->accountIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DeploymentOptions'])) {
            if (!empty($map['DeploymentOptions'])) {
                $model->deploymentOptions = [];
                $n1 = 0;
                foreach ($map['DeploymentOptions'] as $item1) {
                    $model->deploymentOptions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DeploymentTargets'])) {
            $model->deploymentTargets = deploymentTargets::fromMap($map['DeploymentTargets']);
        }

        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
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

        if (isset($map['ParameterOverrides'])) {
            if (!empty($map['ParameterOverrides'])) {
                $model->parameterOverrides = [];
                $n1 = 0;
                foreach ($map['ParameterOverrides'] as $item1) {
                    $model->parameterOverrides[$n1++] = parameterOverrides::fromMap($item1);
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
                    $model->regionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }

        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }

        return $model;
    }
}
