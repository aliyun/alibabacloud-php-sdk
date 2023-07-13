<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetSoundCodeScheduleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 2022-03-28
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 23:59
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1620634297000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example INNER
     *
     * @var string
     */
    public $openType;

    /**
     * @example Md3ZiTL888K9llXDy7890***********
     *
     * @var string
     */
    public $scheduleCode;

    /**
     * @example 2022-03-28
     *
     * @var string
     */
    public $startDate;

    /**
     * @example 00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example WORKING
     *
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
