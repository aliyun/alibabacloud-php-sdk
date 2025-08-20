<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackInstancesShrinkRequest\parameterOverrides;

class UpdateStackInstancesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accountIdsShrink;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $deploymentTargetsShrink;

    /**
     * @var string
     */
    public $operationDescription;

    /**
     * @var string
     */
    public $operationPreferencesShrink;

    /**
     * @var parameterOverrides[]
     */
    public $parameterOverrides;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionIdsShrink;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var int
     */
    public $timeoutInMinutes;
    protected $_name = [
        'accountIdsShrink' => 'AccountIds',
        'clientToken' => 'ClientToken',
        'deploymentTargetsShrink' => 'DeploymentTargets',
        'operationDescription' => 'OperationDescription',
        'operationPreferencesShrink' => 'OperationPreferences',
        'parameterOverrides' => 'ParameterOverrides',
        'regionId' => 'RegionId',
        'regionIdsShrink' => 'RegionIds',
        'stackGroupName' => 'StackGroupName',
        'timeoutInMinutes' => 'TimeoutInMinutes',
    ];

    public function validate()
    {
        if (\is_array($this->parameterOverrides)) {
            Model::validateArray($this->parameterOverrides);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIdsShrink) {
            $res['AccountIds'] = $this->accountIdsShrink;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->deploymentTargetsShrink) {
            $res['DeploymentTargets'] = $this->deploymentTargetsShrink;
        }

        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }

        if (null !== $this->operationPreferencesShrink) {
            $res['OperationPreferences'] = $this->operationPreferencesShrink;
        }

        if (null !== $this->parameterOverrides) {
            if (\is_array($this->parameterOverrides)) {
                $res['ParameterOverrides'] = [];
                $n1 = 0;
                foreach ($this->parameterOverrides as $item1) {
                    $res['ParameterOverrides'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->regionIdsShrink) {
            $res['RegionIds'] = $this->regionIdsShrink;
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
            $model->accountIdsShrink = $map['AccountIds'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DeploymentTargets'])) {
            $model->deploymentTargetsShrink = $map['DeploymentTargets'];
        }

        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }

        if (isset($map['OperationPreferences'])) {
            $model->operationPreferencesShrink = $map['OperationPreferences'];
        }

        if (isset($map['ParameterOverrides'])) {
            if (!empty($map['ParameterOverrides'])) {
                $model->parameterOverrides = [];
                $n1 = 0;
                foreach ($map['ParameterOverrides'] as $item1) {
                    $model->parameterOverrides[$n1] = parameterOverrides::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegionIds'])) {
            $model->regionIdsShrink = $map['RegionIds'];
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
