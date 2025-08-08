<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\rawDAGList;

use AlibabaCloud\Dara\Model;

class dag extends Model
{
    /**
     * @var bool
     */
    public $canEdit;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorNickName;

    /**
     * @var string
     */
    public $dagName;

    /**
     * @var string
     */
    public $dagOwnerId;

    /**
     * @var string
     */
    public $dagOwnerNickName;

    /**
     * @var int
     */
    public $dataFlowId;

    /**
     * @var string
     */
    public $demoId;

    /**
     * @var int
     */
    public $deployId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isDeleted;

    /**
     * @var int
     */
    public $latestInstanceStatus;

    /**
     * @var int
     */
    public $latestInstanceTime;

    /**
     * @var int
     */
    public $scenarioId;

    /**
     * @var int
     */
    public $spaceId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'canEdit' => 'CanEdit',
        'creatorId' => 'CreatorId',
        'creatorNickName' => 'CreatorNickName',
        'dagName' => 'DagName',
        'dagOwnerId' => 'DagOwnerId',
        'dagOwnerNickName' => 'DagOwnerNickName',
        'dataFlowId' => 'DataFlowId',
        'demoId' => 'DemoId',
        'deployId' => 'DeployId',
        'id' => 'Id',
        'isDeleted' => 'IsDeleted',
        'latestInstanceStatus' => 'LatestInstanceStatus',
        'latestInstanceTime' => 'LatestInstanceTime',
        'scenarioId' => 'ScenarioId',
        'spaceId' => 'SpaceId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
