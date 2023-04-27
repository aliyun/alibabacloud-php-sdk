<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\rawDAGList;

use AlibabaCloud\Tea\Model;

class dag extends Model
{
    /**
     * @description Indicates whether the task flow is deleted. Valid values:
     *
     *   **true**: deleted
     *   **false**: not deleted
     *
     * @example true
     *
     * @var bool
     */
    public $canEdit;

    /**
     * @description The ID of the workspace.
     *
     * @example 51****
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The status of the latest execution. Valid values:
     *
     *   **0**: invalid
     *   **1**: scheduling disabled
     *   **2**: waiting to be scheduled
     *
     * @example Creator_Name
     *
     * @var string
     */
    public $creatorNickName;

    /**
     * @example Dag_Name
     *
     * @var string
     */
    public $dagName;

    /**
     * @example 51****
     *
     * @var string
     */
    public $dagOwnerId;

    /**
     * @description The ID of the latest deployment record.
     *
     * @example Owner_Name
     *
     * @var string
     */
    public $dagOwnerNickName;

    /**
     * @description The name of the task flow owner.
     *
     * @example -
     *
     * @var int
     */
    public $dataFlowId;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) or [ListUserTenants](~~198074~~) operation to obtain the tenant ID.
     *
     * @example -
     *
     * @var string
     */
    public $demoId;

    /**
     * @description The ID of the business scenario.
     *
     * @example 12**
     *
     * @var int
     */
    public $deployId;

    /**
     * @description The status of the task flow. Valid values:
     *
     *   **0**: invalid
     *   **1**: scheduling disabled
     *   **2**: waiting to be scheduled
     *
     * @example 134137****
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the user. You can call the [ListUsers](~~141938~~) or [GetUser](~~147098~~) operation to obtain the user ID.
     *
     * @example false
     *
     * @var bool
     */
    public $isDeleted;

    /**
     * @description The name of the task flow.
     *
     * @example 0
     *
     * @var int
     */
    public $latestInstanceStatus;

    /**
     * @description Queries the task flows corresponding to a specific business scenario in a workspace in Data Management (DMS).
     *
     * @example 2022-04-14
     *
     * @var int
     */
    public $latestInstanceTime;

    /**
     * @description The task flows in the default business scenario.
     *
     * @example 2**
     *
     * @var int
     */
    public $scenarioId;

    /**
     * @description The extended field. No meaning is specified for this field.
     *
     * @example 1
     *
     * @var int
     */
    public $spaceId;

    /**
     * @description The ID of the task flow.
     *
     * @example 2
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'canEdit'              => 'CanEdit',
        'creatorId'            => 'CreatorId',
        'creatorNickName'      => 'CreatorNickName',
        'dagName'              => 'DagName',
        'dagOwnerId'           => 'DagOwnerId',
        'dagOwnerNickName'     => 'DagOwnerNickName',
        'dataFlowId'           => 'DataFlowId',
        'demoId'               => 'DemoId',
        'deployId'             => 'DeployId',
        'id'                   => 'Id',
        'isDeleted'            => 'IsDeleted',
        'latestInstanceStatus' => 'LatestInstanceStatus',
        'latestInstanceTime'   => 'LatestInstanceTime',
        'scenarioId'           => 'ScenarioId',
        'spaceId'              => 'SpaceId',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canEdit) {
            $res['CanEdit'] = $this->canEdit;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->creatorNickName) {
            $res['CreatorNickName'] = $this->creatorNickName;
        }
        if (null !== $this->dagName) {
            $res['DagName'] = $this->dagName;
        }
        if (null !== $this->dagOwnerId) {
            $res['DagOwnerId'] = $this->dagOwnerId;
        }
        if (null !== $this->dagOwnerNickName) {
            $res['DagOwnerNickName'] = $this->dagOwnerNickName;
        }
        if (null !== $this->dataFlowId) {
            $res['DataFlowId'] = $this->dataFlowId;
        }
        if (null !== $this->demoId) {
            $res['DemoId'] = $this->demoId;
        }
        if (null !== $this->deployId) {
            $res['DeployId'] = $this->deployId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }
        if (null !== $this->latestInstanceStatus) {
            $res['LatestInstanceStatus'] = $this->latestInstanceStatus;
        }
        if (null !== $this->latestInstanceTime) {
            $res['LatestInstanceTime'] = $this->latestInstanceTime;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanEdit'])) {
            $model->canEdit = $map['CanEdit'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['CreatorNickName'])) {
            $model->creatorNickName = $map['CreatorNickName'];
        }
        if (isset($map['DagName'])) {
            $model->dagName = $map['DagName'];
        }
        if (isset($map['DagOwnerId'])) {
            $model->dagOwnerId = $map['DagOwnerId'];
        }
        if (isset($map['DagOwnerNickName'])) {
            $model->dagOwnerNickName = $map['DagOwnerNickName'];
        }
        if (isset($map['DataFlowId'])) {
            $model->dataFlowId = $map['DataFlowId'];
        }
        if (isset($map['DemoId'])) {
            $model->demoId = $map['DemoId'];
        }
        if (isset($map['DeployId'])) {
            $model->deployId = $map['DeployId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }
        if (isset($map['LatestInstanceStatus'])) {
            $model->latestInstanceStatus = $map['LatestInstanceStatus'];
        }
        if (isset($map['LatestInstanceTime'])) {
            $model->latestInstanceTime = $map['LatestInstanceTime'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
