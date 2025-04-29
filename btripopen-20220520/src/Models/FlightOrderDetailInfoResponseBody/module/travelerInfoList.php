<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoResponseBody\module;

use AlibabaCloud\Dara\Model;

class travelerInfoList extends Model
{
    /**
     * @var string
     */
    public $birthDate;

    /**
     * @var string
     */
    public $certNo;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var int
     */
    public $openTicketStatus;

    /**
     * @var string
     */
    public $passengerName;

    /**
     * @var string
     */
    public $passengerType;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $ticketNo;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'birthDate' => 'birth_date',
        'certNo' => 'cert_no',
        'certType' => 'cert_type',
        'openTicketStatus' => 'open_ticket_status',
        'passengerName' => 'passenger_name',
        'passengerType' => 'passenger_type',
        'phone' => 'phone',
        'ticketNo' => 'ticket_no',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->birthDate) {
            $res['birth_date'] = $this->birthDate;
        }

        if (null !== $this->certNo) {
            $res['cert_no'] = $this->certNo;
        }

        if (null !== $this->certType) {
            $res['cert_type'] = $this->certType;
        }

        if (null !== $this->openTicketStatus) {
            $res['open_ticket_status'] = $this->openTicketStatus;
        }

        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
        }

        if (null !== $this->passengerType) {
            $res['passenger_type'] = $this->passengerType;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['birth_date'])) {
            $model->birthDate = $map['birth_date'];
        }

        if (isset($map['cert_no'])) {
            $model->certNo = $map['cert_no'];
        }

        if (isset($map['cert_type'])) {
            $model->certType = $map['cert_type'];
        }

        if (isset($map['open_ticket_status'])) {
            $model->openTicketStatus = $map['open_ticket_status'];
        }

        if (isset($map['passenger_name'])) {
            $model->passengerName = $map['passenger_name'];
        }

        if (isset($map['passenger_type'])) {
            $model->passengerType = $map['passenger_type'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
