<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class QueryTaskDetailRequest extends Model
{
    /**
     * @var string
     */
    public $outboundTaskId;

    /**
     * @var string
     */
    public $statusList;

    /**
     * @var string
     */
    public $endReasonList;

    /**
     * @var string
     */
    public $skillGroup;

    /**
     * @var string
     */
    public $servicerName;

    /**
     * @var string
     */
    public $servicerId;

    /**
     * @var string
     */
    public $priorityList;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $ani;

    /**
     * @var string
     */
    public $dnis;

    /**
     * @var string
     */
    public $sid;

    /**
     * @var string
     */
    public $departmentIdList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;
    protected $_name = [
        'outboundTaskId'   => 'OutboundTaskId',
        'statusList'       => 'StatusList',
        'endReasonList'    => 'EndReasonList',
        'skillGroup'       => 'SkillGroup',
        'servicerName'     => 'ServicerName',
        'servicerId'       => 'ServicerId',
        'priorityList'     => 'PriorityList',
        'taskId'           => 'TaskId',
        'ani'              => 'Ani',
        'dnis'             => 'Dnis',
        'sid'              => 'Sid',
        'departmentIdList' => 'DepartmentIdList',
        'instanceId'       => 'InstanceId',
        'pageSize'         => 'PageSize',
        'currentPage'      => 'CurrentPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outboundTaskId) {
            $res['OutboundTaskId'] = $this->outboundTaskId;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->endReasonList) {
            $res['EndReasonList'] = $this->endReasonList;
        }
        if (null !== $this->skillGroup) {
            $res['SkillGroup'] = $this->skillGroup;
        }
        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
        }
        if (null !== $this->servicerId) {
            $res['ServicerId'] = $this->servicerId;
        }
        if (null !== $this->priorityList) {
            $res['PriorityList'] = $this->priorityList;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->ani) {
            $res['Ani'] = $this->ani;
        }
        if (null !== $this->dnis) {
            $res['Dnis'] = $this->dnis;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->departmentIdList) {
            $res['DepartmentIdList'] = $this->departmentIdList;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
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
        if (isset($map['OutboundTaskId'])) {
            $model->outboundTaskId = $map['OutboundTaskId'];
        }
        if (isset($map['StatusList'])) {
            $model->statusList = $map['StatusList'];
        }
        if (isset($map['EndReasonList'])) {
            $model->endReasonList = $map['EndReasonList'];
        }
        if (isset($map['SkillGroup'])) {
            $model->skillGroup = $map['SkillGroup'];
        }
        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }
        if (isset($map['ServicerId'])) {
            $model->servicerId = $map['ServicerId'];
        }
        if (isset($map['PriorityList'])) {
            $model->priorityList = $map['PriorityList'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Ani'])) {
            $model->ani = $map['Ani'];
        }
        if (isset($map['Dnis'])) {
            $model->dnis = $map['Dnis'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['DepartmentIdList'])) {
            $model->departmentIdList = $map['DepartmentIdList'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        return $model;
    }
}
