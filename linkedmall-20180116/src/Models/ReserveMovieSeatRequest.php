<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class ReserveMovieSeatRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $scheduleId;

    /**
     * @var string
     */
    public $seatIds;

    /**
     * @var string
     */
    public $seatNames;

    /**
     * @var string
     */
    public $bizUid;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $extJson;
    protected $_name = [
        'bizId'      => 'BizId',
        'scheduleId' => 'ScheduleId',
        'seatIds'    => 'SeatIds',
        'seatNames'  => 'SeatNames',
        'bizUid'     => 'BizUid',
        'mobile'     => 'Mobile',
        'extJson'    => 'ExtJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->scheduleId) {
            $res['ScheduleId'] = $this->scheduleId;
        }
        if (null !== $this->seatIds) {
            $res['SeatIds'] = $this->seatIds;
        }
        if (null !== $this->seatNames) {
            $res['SeatNames'] = $this->seatNames;
        }
        if (null !== $this->bizUid) {
            $res['BizUid'] = $this->bizUid;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReserveMovieSeatRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }
        if (isset($map['SeatIds'])) {
            $model->seatIds = $map['SeatIds'];
        }
        if (isset($map['SeatNames'])) {
            $model->seatNames = $map['SeatNames'];
        }
        if (isset($map['BizUid'])) {
            $model->bizUid = $map['BizUid'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }

        return $model;
    }
}
