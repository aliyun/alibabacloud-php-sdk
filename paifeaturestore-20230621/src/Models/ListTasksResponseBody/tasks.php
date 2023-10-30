<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListTasksResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @example 2023-07-04T11:26:09.036+08:00
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2023-07-04T11:26:09.036+08:00
     *
     * @var string
     */
    public $gmtExecutedTime;

    /**
     * @example 2023-07-04T11:26:09.036+08:00
     *
     * @var string
     */
    public $gmtFinishedTime;

    /**
     * @example 5
     *
     * @var string
     */
    public $objectId;

    /**
     * @example ModelFeature
     *
     * @var string
     */
    public $objectType;

    /**
     * @example 4
     *
     * @var string
     */
    public $projectId;

    /**
     * @example project_1
     *
     * @var string
     */
    public $projectName;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example 4
     *
     * @var string
     */
    public $taskId;

    /**
     * @example OfflineToOnline
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtExecutedTime' => 'GmtExecutedTime',
        'gmtFinishedTime' => 'GmtFinishedTime',
        'objectId'        => 'ObjectId',
        'objectType'      => 'ObjectType',
        'projectId'       => 'ProjectId',
        'projectName'     => 'ProjectName',
        'status'          => 'Status',
        'taskId'          => 'TaskId',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtExecutedTime) {
            $res['GmtExecutedTime'] = $this->gmtExecutedTime;
        }
        if (null !== $this->gmtFinishedTime) {
            $res['GmtFinishedTime'] = $this->gmtFinishedTime;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtExecutedTime'])) {
            $model->gmtExecutedTime = $map['GmtExecutedTime'];
        }
        if (isset($map['GmtFinishedTime'])) {
            $model->gmtFinishedTime = $map['GmtFinishedTime'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
