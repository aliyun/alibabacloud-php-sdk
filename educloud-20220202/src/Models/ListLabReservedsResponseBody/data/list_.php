<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models\ListLabReservedsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $labId;

    /**
     * @var string
     */
    public $labTitle;

    /**
     * @var int
     */
    public $number;

    /**
     * @var string
     */
    public $reservedId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'endTime'    => 'EndTime',
        'labId'      => 'LabId',
        'labTitle'   => 'LabTitle',
        'number'     => 'Number',
        'reservedId' => 'ReservedId',
        'startTime'  => 'StartTime',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->labId) {
            $res['LabId'] = $this->labId;
        }
        if (null !== $this->labTitle) {
            $res['LabTitle'] = $this->labTitle;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->reservedId) {
            $res['ReservedId'] = $this->reservedId;
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
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['LabId'])) {
            $model->labId = $map['LabId'];
        }
        if (isset($map['LabTitle'])) {
            $model->labTitle = $map['LabTitle'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['ReservedId'])) {
            $model->reservedId = $map['ReservedId'];
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
