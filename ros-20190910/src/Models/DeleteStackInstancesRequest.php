<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DeleteStackInstancesRequest extends Model
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
     * @var mixed[]
     */
    public $accountIds;

    /**
     * @var mixed[]
     */
    public $regionIds;

    /**
     * @var bool
     */
    public $retainStacks;

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
     * @var mixed[]
     */
    public $deploymentTargets;
    protected $_name = [
        'regionId'             => 'RegionId',
        'stackGroupName'       => 'StackGroupName',
        'accountIds'           => 'AccountIds',
        'regionIds'            => 'RegionIds',
        'retainStacks'         => 'RetainStacks',
        'clientToken'          => 'ClientToken',
        'operationDescription' => 'OperationDescription',
        'operationPreferences' => 'OperationPreferences',
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
        if (null !== $this->retainStacks) {
            $res['RetainStacks'] = $this->retainStacks;
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
        if (null !== $this->deploymentTargets) {
            $res['DeploymentTargets'] = $this->deploymentTargets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteStackInstancesRequest
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
            $model->accountIds = $map['AccountIds'];
        }
        if (isset($map['RegionIds'])) {
            $model->regionIds = $map['RegionIds'];
        }
        if (isset($map['RetainStacks'])) {
            $model->retainStacks = $map['RetainStacks'];
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
        if (isset($map['DeploymentTargets'])) {
            $model->deploymentTargets = $map['DeploymentTargets'];
        }

        return $model;
    }
}
