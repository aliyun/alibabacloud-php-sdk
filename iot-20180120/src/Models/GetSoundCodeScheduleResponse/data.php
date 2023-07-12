<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetSoundCodeScheduleResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
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
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $openType;

    /**
     * @var string
     */
    public $scheduleCode;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'description'  => 'Description',
        'endDate'      => 'EndDate',
        'endTime'      => 'EndTime',
        'gmtCreate'    => 'GmtCreate',
        'name'         => 'Name',
        'openType'     => 'OpenType',
        'scheduleCode' => 'ScheduleCode',
        'startDate'    => 'StartDate',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('endDate', $this->endDate, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('openType', $this->openType, true);
        Model::validateRequired('scheduleCode', $this->scheduleCode, true);
        Model::validateRequired('startDate', $this->startDate, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->openType) {
            $res['OpenType'] = $this->openType;
        }
        if (null !== $this->scheduleCode) {
            $res['ScheduleCode'] = $this->scheduleCode;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OpenType'])) {
            $model->openType = $map['OpenType'];
        }
        if (isset($map['ScheduleCode'])) {
            $model->scheduleCode = $map['ScheduleCode'];
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

        return $model;
    }
}
