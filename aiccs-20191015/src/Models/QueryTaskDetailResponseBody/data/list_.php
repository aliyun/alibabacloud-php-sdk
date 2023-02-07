<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTaskDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $ani;

    /**
     * @var int
     */
    public $buId;

    /**
     * @var int
     */
    public $departmentId;

    /**
     * @var string
     */
    public $dnis;

    /**
     * @var int
     */
    public $endReason;

    /**
     * @var string
     */
    public $extAttrs;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $memberId;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var int
     */
    public $outboundNum;

    /**
     * @var int
     */
    public $outboundTaskId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $retryTime;

    /**
     * @var int
     */
    public $servicerId;

    /**
     * @var string
     */
    public $servicerName;

    /**
     * @var int
     */
    public $skillGroup;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'ani'            => 'Ani',
        'buId'           => 'BuId',
        'departmentId'   => 'DepartmentId',
        'dnis'           => 'Dnis',
        'endReason'      => 'EndReason',
        'extAttrs'       => 'ExtAttrs',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'id'             => 'Id',
        'memberId'       => 'MemberId',
        'memberName'     => 'MemberName',
        'outboundNum'    => 'OutboundNum',
        'outboundTaskId' => 'OutboundTaskId',
        'priority'       => 'Priority',
        'retryTime'      => 'RetryTime',
        'servicerId'     => 'ServicerId',
        'servicerName'   => 'ServicerName',
        'skillGroup'     => 'SkillGroup',
        'status'         => 'Status',
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
        if (null !== $this->buId) {
            $res['BuId'] = $this->buId;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->dnis) {
            $res['Dnis'] = $this->dnis;
        }
        if (null !== $this->endReason) {
            $res['EndReason'] = $this->endReason;
        }
        if (null !== $this->extAttrs) {
            $res['ExtAttrs'] = $this->extAttrs;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->outboundNum) {
            $res['OutboundNum'] = $this->outboundNum;
        }
        if (null !== $this->outboundTaskId) {
            $res['OutboundTaskId'] = $this->outboundTaskId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->retryTime) {
            $res['RetryTime'] = $this->retryTime;
        }
        if (null !== $this->servicerId) {
            $res['ServicerId'] = $this->servicerId;
        }
        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
        }
        if (null !== $this->skillGroup) {
            $res['SkillGroup'] = $this->skillGroup;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ani'])) {
            $model->ani = $map['Ani'];
        }
        if (isset($map['BuId'])) {
            $model->buId = $map['BuId'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['Dnis'])) {
            $model->dnis = $map['Dnis'];
        }
        if (isset($map['EndReason'])) {
            $model->endReason = $map['EndReason'];
        }
        if (isset($map['ExtAttrs'])) {
            $model->extAttrs = $map['ExtAttrs'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['OutboundNum'])) {
            $model->outboundNum = $map['OutboundNum'];
        }
        if (isset($map['OutboundTaskId'])) {
            $model->outboundTaskId = $map['OutboundTaskId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RetryTime'])) {
            $model->retryTime = $map['RetryTime'];
        }
        if (isset($map['ServicerId'])) {
            $model->servicerId = $map['ServicerId'];
        }
        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }
        if (isset($map['SkillGroup'])) {
            $model->skillGroup = $map['SkillGroup'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
