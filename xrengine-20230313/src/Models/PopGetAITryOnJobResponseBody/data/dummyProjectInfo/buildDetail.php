<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopGetAITryOnJobResponseBody\data\dummyProjectInfo;

use AlibabaCloud\Tea\Model;

class buildDetail extends Model
{
    /**
     * @var string
     */
    public $completedTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $estimatedDuration;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $runningTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $submitTime;
    protected $_name = [
        'completedTime'     => 'CompletedTime',
        'createTime'        => 'CreateTime',
        'deleted'           => 'Deleted',
        'errorMessage'      => 'ErrorMessage',
        'estimatedDuration' => 'EstimatedDuration',
        'id'                => 'Id',
        'modifiedTime'      => 'ModifiedTime',
        'runningTime'       => 'RunningTime',
        'status'            => 'Status',
        'submitTime'        => 'SubmitTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completedTime) {
            $res['CompletedTime'] = $this->completedTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->estimatedDuration) {
            $res['EstimatedDuration'] = $this->estimatedDuration;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buildDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompletedTime'])) {
            $model->completedTime = $map['CompletedTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['EstimatedDuration'])) {
            $model->estimatedDuration = $map['EstimatedDuration'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }

        return $model;
    }
}
