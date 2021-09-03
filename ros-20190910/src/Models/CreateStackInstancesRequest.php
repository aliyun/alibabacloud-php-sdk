<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackInstancesRequest\deploymentTargets;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackInstancesRequest\parameterOverrides;
use AlibabaCloud\Tea\Model;

class CreateStackInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string[]
     */
    public $accountIds;

    /**
     * @var string[]
     */
    public $regionIds;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $operationDescription;

    /**
     * @var mixed[]
     */
    public $operationPreferences;

    /**
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @var bool
     */
    public $disableRollback;

    /**
     * @var parameterOverrides[]
     */
    public $parameterOverrides;

    /**
     * @var deploymentTargets
     */
    public $deploymentTargets;
    protected $_name = [
        'regionId'             => 'RegionId',
        'stackGroupName'       => 'StackGroupName',
        'accountIds'           => 'AccountIds',
        'regionIds'            => 'RegionIds',
        'clientToken'          => 'ClientToken',
        'operationDescription' => 'OperationDescription',
        'operationPreferences' => 'OperationPreferences',
        'timeoutInMinutes'     => 'TimeoutInMinutes',
        'disableRollback'      => 'DisableRollback',
        'parameterOverrides'   => 'ParameterOverrides',
        'deploymentTargets'    => 'DeploymentTargets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }
        if (null !== $this->regionIds) {
            $res['RegionIds'] = $this->regionIds;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }
        if (null !== $this->operationPreferences) {
            $res['OperationPreferences'] = $this->operationPreferences;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }
        if (null !== $this->parameterOverrides) {
            $res['ParameterOverrides'] = [];
            if (null !== $this->parameterOverrides && \is_array($this->parameterOverrides)) {
                $n = 0;
                foreach ($this->parameterOverrides as $item) {
                    $res['ParameterOverrides'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deploymentTargets) {
            $res['DeploymentTargets'] = null !== $this->deploymentTargets ? $this->deploymentTargets->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStackInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = $map['AccountIds'];
            }
        }
        if (isset($map['RegionIds'])) {
            if (!empty($map['RegionIds'])) {
                $model->regionIds = $map['RegionIds'];
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }
        if (isset($map['OperationPreferences'])) {
            $model->operationPreferences = $map['OperationPreferences'];
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }
        if (isset($map['ParameterOverrides'])) {
            if (!empty($map['ParameterOverrides'])) {
                $model->parameterOverrides = [];
                $n                         = 0;
                foreach ($map['ParameterOverrides'] as $item) {
                    $model->parameterOverrides[$n++] = null !== $item ? parameterOverrides::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DeploymentTargets'])) {
            $model->deploymentTargets = deploymentTargets::fromMap($map['DeploymentTargets']);
        }

        return $model;
    }
}
