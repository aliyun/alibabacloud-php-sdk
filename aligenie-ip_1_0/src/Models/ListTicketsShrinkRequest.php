<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListTicketsShrinkRequest extends Model
{
    /**
     * @example 2022-09-14 14:23:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example af7***536
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDesc;

    /**
     * @example false
     *
     * @var bool
     */
    public $isNeedCallback;

    /**
     * @example false
     *
     * @var bool
     */
    public $isNeedCharges;

    /**
     * @var string
     */
    public $pageShrink;

    /**
     * @example 1211
     *
     * @var string
     */
    public $roomNo;

    /**
     * @example gmtCalled
     *
     * @var string
     */
    public $sortField;

    /**
     * @example 2022-04-08 09:39:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example waiting
     *
     * @var string
     */
    public $status;

    /**
     * @example ""
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endTime'        => 'EndTime',
        'hotelId'        => 'HotelId',
        'isDesc'         => 'IsDesc',
        'isNeedCallback' => 'IsNeedCallback',
        'isNeedCharges'  => 'IsNeedCharges',
        'pageShrink'     => 'Page',
        'roomNo'         => 'RoomNo',
        'sortField'      => 'SortField',
        'startTime'      => 'StartTime',
        'status'         => 'Status',
        'type'           => 'Type',
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
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->isDesc) {
            $res['IsDesc'] = $this->isDesc;
        }
        if (null !== $this->isNeedCallback) {
            $res['IsNeedCallback'] = $this->isNeedCallback;
        }
        if (null !== $this->isNeedCharges) {
            $res['IsNeedCharges'] = $this->isNeedCharges;
        }
        if (null !== $this->pageShrink) {
            $res['Page'] = $this->pageShrink;
        }
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }
        if (null !== $this->sortField) {
            $res['SortField'] = $this->sortField;
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
     * @return ListTicketsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['IsDesc'])) {
            $model->isDesc = $map['IsDesc'];
        }
        if (isset($map['IsNeedCallback'])) {
            $model->isNeedCallback = $map['IsNeedCallback'];
        }
        if (isset($map['IsNeedCharges'])) {
            $model->isNeedCharges = $map['IsNeedCharges'];
        }
        if (isset($map['Page'])) {
            $model->pageShrink = $map['Page'];
        }
        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }
        if (isset($map['SortField'])) {
            $model->sortField = $map['SortField'];
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
