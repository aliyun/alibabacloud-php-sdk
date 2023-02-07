<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class QueryTaskDetailRequest extends Model
{
    /**
     * @var string
     */
    public $ani;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $departmentIdList;

    /**
     * @var string
     */
    public $dnis;

    /**
     * @var string
     */
    public $endReasonList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $outboundTaskId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $priorityList;

    /**
     * @var string
     */
    public $servicerId;

    /**
     * @var string
     */
    public $servicerName;

    /**
     * @var string
     */
    public $sid;

    /**
     * @var string
     */
    public $skillGroup;

    /**
     * @var string
     */
    public $statusList;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'ani'              => 'Ani',
        'currentPage'      => 'CurrentPage',
        'departmentIdList' => 'DepartmentIdList',
        'dnis'             => 'Dnis',
        'endReasonList'    => 'EndReasonList',
        'instanceId'       => 'InstanceId',
        'outboundTaskId'   => 'OutboundTaskId',
        'pageSize'         => 'PageSize',
        'priorityList'     => 'PriorityList',
        'servicerId'       => 'ServicerId',
        'servicerName'     => 'ServicerName',
        'sid'              => 'Sid',
        'skillGroup'       => 'SkillGroup',
        'statusList'       => 'StatusList',
        'taskId'           => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ani) {
            $res['Ani'] = $this->ani;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->departmentIdList) {
            $res['DepartmentIdList'] = $this->departmentIdList;
        }
        if (null !== $this->dnis) {
            $res['Dnis'] = $this->dnis;
        }
        if (null !== $this->endReasonList) {
            $res['EndReasonList'] = $this->endReasonList;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->outboundTaskId) {
            $res['OutboundTaskId'] = $this->outboundTaskId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->priorityList) {
            $res['PriorityList'] = $this->priorityList;
        }
        if (null !== $this->servicerId) {
            $res['ServicerId'] = $this->servicerId;
        }
        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->skillGroup) {
            $res['SkillGroup'] = $this->skillGroup;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTaskDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ani'])) {
            $model->ani = $map['Ani'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DepartmentIdList'])) {
            $model->departmentIdList = $map['DepartmentIdList'];
        }
        if (isset($map['Dnis'])) {
            $model->dnis = $map['Dnis'];
        }
        if (isset($map['EndReasonList'])) {
            $model->endReasonList = $map['EndReasonList'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OutboundTaskId'])) {
            $model->outboundTaskId = $map['OutboundTaskId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PriorityList'])) {
            $model->priorityList = $map['PriorityList'];
        }
        if (isset($map['ServicerId'])) {
            $model->servicerId = $map['ServicerId'];
        }
        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['SkillGroup'])) {
            $model->skillGroup = $map['SkillGroup'];
        }
        if (isset($map['StatusList'])) {
            $model->statusList = $map['StatusList'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
