<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListDataAgentAccuracyTestTasksResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accuracyTestInsId;

    /**
     * @var string
     */
    public $accuracyTestTaskId;

    /**
     * @var int
     */
    public $finishedTaskNumber;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $maxConcurrent;

    /**
     * @var bool
     */
    public $needDelete;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $totalTaskNumber;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accuracyTestInsId' => 'AccuracyTestInsId',
        'accuracyTestTaskId' => 'AccuracyTestTaskId',
        'finishedTaskNumber' => 'FinishedTaskNumber',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'maxConcurrent' => 'MaxConcurrent',
        'needDelete' => 'NeedDelete',
        'status' => 'Status',
        'totalTaskNumber' => 'TotalTaskNumber',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accuracyTestInsId) {
            $res['AccuracyTestInsId'] = $this->accuracyTestInsId;
        }

        if (null !== $this->accuracyTestTaskId) {
            $res['AccuracyTestTaskId'] = $this->accuracyTestTaskId;
        }

        if (null !== $this->finishedTaskNumber) {
            $res['FinishedTaskNumber'] = $this->finishedTaskNumber;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->maxConcurrent) {
            $res['MaxConcurrent'] = $this->maxConcurrent;
        }

        if (null !== $this->needDelete) {
            $res['NeedDelete'] = $this->needDelete;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalTaskNumber) {
            $res['TotalTaskNumber'] = $this->totalTaskNumber;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AccuracyTestInsId'])) {
            $model->accuracyTestInsId = $map['AccuracyTestInsId'];
        }

        if (isset($map['AccuracyTestTaskId'])) {
            $model->accuracyTestTaskId = $map['AccuracyTestTaskId'];
        }

        if (isset($map['FinishedTaskNumber'])) {
            $model->finishedTaskNumber = $map['FinishedTaskNumber'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['MaxConcurrent'])) {
            $model->maxConcurrent = $map['MaxConcurrent'];
        }

        if (isset($map['NeedDelete'])) {
            $model->needDelete = $map['NeedDelete'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalTaskNumber'])) {
            $model->totalTaskNumber = $map['TotalTaskNumber'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
