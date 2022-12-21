<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowResponseBody\taskFlowList;

use AlibabaCloud\Tea\Model;

class taskFlow extends Model
{
    /**
     * @description The ID of the user who creates the task flow.
     *
     * @example 51****
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The name of the user who creates the task flow.
     *
     * @example Creator_NickName
     *
     * @var string
     */
    public $creatorNickName;

    /**
     * @description The name of the task flow owner.
     *
     * @example Owner_NickName
     *
     * @var string
     */
    public $dagOwnerNickName;

    /**
     * @description The ID of the latest deployment record.
     *
     * @example 12**
     *
     * @var int
     */
    public $deployId;

    /**
     * @description The ID of the task flow.
     *
     * @example 134137****
     *
     * @var int
     */
    public $id;

    /**
     * @description The status of the latest execution. Valid values:
     *
     *   **0**: invalid.
     *   **1**: scheduling disabled.
     *   **2**: waiting to be scheduled.
     *
     * @example 0
     *
     * @var int
     */
    public $latestInstanceStatus;

    /**
     * @description The time when the latest execution record was generated.
     *
     * @example 2022-04-13
     *
     * @var string
     */
    public $latestInstanceTime;

    /**
     * @description The status of the task flow. Valid values:
     *
     *   **0**: The task flow is invalid.
     *   **1**: Scheduling is disabled for the task flow.
     *   **2**: The task flow is waiting to be scheduled.
     *
     * @example 2
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'creatorId'            => 'CreatorId',
        'creatorNickName'      => 'CreatorNickName',
        'dagOwnerNickName'     => 'DagOwnerNickName',
        'deployId'             => 'DeployId',
        'id'                   => 'Id',
        'latestInstanceStatus' => 'LatestInstanceStatus',
        'latestInstanceTime'   => 'LatestInstanceTime',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->creatorNickName) {
            $res['CreatorNickName'] = $this->creatorNickName;
        }
        if (null !== $this->dagOwnerNickName) {
            $res['DagOwnerNickName'] = $this->dagOwnerNickName;
        }
        if (null !== $this->deployId) {
            $res['DeployId'] = $this->deployId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->latestInstanceStatus) {
            $res['LatestInstanceStatus'] = $this->latestInstanceStatus;
        }
        if (null !== $this->latestInstanceTime) {
            $res['LatestInstanceTime'] = $this->latestInstanceTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskFlow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['CreatorNickName'])) {
            $model->creatorNickName = $map['CreatorNickName'];
        }
        if (isset($map['DagOwnerNickName'])) {
            $model->dagOwnerNickName = $map['DagOwnerNickName'];
        }
        if (isset($map['DeployId'])) {
            $model->deployId = $map['DeployId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LatestInstanceStatus'])) {
            $model->latestInstanceStatus = $map['LatestInstanceStatus'];
        }
        if (isset($map['LatestInstanceTime'])) {
            $model->latestInstanceTime = $map['LatestInstanceTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
