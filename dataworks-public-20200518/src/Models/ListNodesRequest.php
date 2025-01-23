<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ListNodesRequest extends Model
{
    /**
     * @var string
     */
    public $bizName;
    /**
     * @var string
     */
    public $nodeName;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $programType;
    /**
     * @var string
     */
    public $projectEnv;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $schedulerType;
    protected $_name = [
        'bizName'       => 'BizName',
        'nodeName'      => 'NodeName',
        'owner'         => 'Owner',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'programType'   => 'ProgramType',
        'projectEnv'    => 'ProjectEnv',
        'projectId'     => 'ProjectId',
        'schedulerType' => 'SchedulerType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->programType) {
            $res['ProgramType'] = $this->programType;
        }

        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
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
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProgramType'])) {
            $model->programType = $map['ProgramType'];
        }

        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }

        return $model;
    }
}
