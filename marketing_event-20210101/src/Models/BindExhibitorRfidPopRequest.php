<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Tea\Model;

class BindExhibitorRfidPopRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 4546
     *
     * @var int
     */
    public $activityId;

    /**
     * @description This parameter is required.
     *
     * @example Z10
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 2024-09-25 14:11
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-09-25 14:11
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 451246
     *
     * @var int
     */
    public $guestTicketRecordId;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @example asdojzopf
     *
     * @var string
     */
    public $rfid;

    /**
     * @description This parameter is required.
     *
     * @example 4546-100000
     *
     * @var string
     */
    public $ticketCode;
    protected $_name = [
        'activityId'          => 'ActivityId',
        'deviceId'            => 'DeviceId',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'guestTicketRecordId' => 'GuestTicketRecordId',
        'id'                  => 'Id',
        'rfid'                => 'Rfid',
        'ticketCode'          => 'TicketCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->guestTicketRecordId) {
            $res['GuestTicketRecordId'] = $this->guestTicketRecordId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->rfid) {
            $res['Rfid'] = $this->rfid;
        }
        if (null !== $this->ticketCode) {
            $res['TicketCode'] = $this->ticketCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindExhibitorRfidPopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GuestTicketRecordId'])) {
            $model->guestTicketRecordId = $map['GuestTicketRecordId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Rfid'])) {
            $model->rfid = $map['Rfid'];
        }
        if (isset($map['TicketCode'])) {
            $model->ticketCode = $map['TicketCode'];
        }

        return $model;
    }
}
