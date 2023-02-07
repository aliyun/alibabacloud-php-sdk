<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryOutboundTaskResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $buId;

    /**
     * @var string
     */
    public $callerNum;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var int
     */
    public $departmentId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $endTime;

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
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $model;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $retryInterval;

    /**
     * @var int
     */
    public $retryTime;

    /**
     * @var int
     */
    public $skillGroup;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'buId'          => 'BuId',
        'callerNum'     => 'CallerNum',
        'creator'       => 'Creator',
        'departmentId'  => 'DepartmentId',
        'description'   => 'Description',
        'endDate'       => 'EndDate',
        'endTime'       => 'EndTime',
        'extAttrs'      => 'ExtAttrs',
        'gmtCreate'     => 'GmtCreate',
        'gmtModified'   => 'GmtModified',
        'groupName'     => 'GroupName',
        'id'            => 'Id',
        'model'         => 'Model',
        'modifier'      => 'Modifier',
        'name'          => 'Name',
        'retryInterval' => 'RetryInterval',
        'retryTime'     => 'RetryTime',
        'skillGroup'    => 'SkillGroup',
        'startDate'     => 'StartDate',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buId) {
            $res['BuId'] = $this->buId;
        }
        if (null !== $this->callerNum) {
            $res['CallerNum'] = $this->callerNum;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->retryTime) {
            $res['RetryTime'] = $this->retryTime;
        }
        if (null !== $this->skillGroup) {
            $res['SkillGroup'] = $this->skillGroup;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BuId'])) {
            $model->buId = $map['BuId'];
        }
        if (isset($map['CallerNum'])) {
            $model->callerNum = $map['CallerNum'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['RetryTime'])) {
            $model->retryTime = $map['RetryTime'];
        }
        if (isset($map['SkillGroup'])) {
            $model->skillGroup = $map['SkillGroup'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
