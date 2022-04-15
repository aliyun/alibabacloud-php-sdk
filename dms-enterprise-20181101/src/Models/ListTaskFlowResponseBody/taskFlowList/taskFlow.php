<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowResponseBody\taskFlowList;

use AlibabaCloud\Tea\Model;

class taskFlow extends Model
{
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
    public $dagOwnerNickName;

    /**
     * @var int
     */
    public $deployId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $latestInstanceStatus;

    /**
     * @var string
     */
    public $latestInstanceTime;

    /**
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
