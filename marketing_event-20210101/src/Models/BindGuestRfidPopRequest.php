<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Dara\Model;

class BindGuestRfidPopRequest extends Model
{
    /**
     * @var int
     */
    public $activityId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $guestTicketRecordId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $rfid;

    /**
     * @var string
     */
    public $ticketCode;
    protected $_name = [
        'activityId' => 'ActivityId',
        'deviceId' => 'DeviceId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'guestTicketRecordId' => 'GuestTicketRecordId',
        'id' => 'Id',
        'rfid' => 'Rfid',
        'ticketCode' => 'TicketCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
