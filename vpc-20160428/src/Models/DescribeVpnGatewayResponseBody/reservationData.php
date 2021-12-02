<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewayResponseBody;

use AlibabaCloud\Tea\Model;

class reservationData extends Model
{
    /**
     * @var string
     */
    public $reservationEndTime;

    /**
     * @var string
     */
    public $reservationIpsec;

    /**
     * @var int
     */
    public $reservationMaxConnections;

    /**
     * @var string
     */
    public $reservationOrderType;

    /**
     * @var string
     */
    public $reservationSpec;

    /**
     * @var string
     */
    public $reservationSsl;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'reservationEndTime'        => 'ReservationEndTime',
        'reservationIpsec'          => 'ReservationIpsec',
        'reservationMaxConnections' => 'ReservationMaxConnections',
        'reservationOrderType'      => 'ReservationOrderType',
        'reservationSpec'           => 'ReservationSpec',
        'reservationSsl'            => 'ReservationSsl',
        'status'                    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservationEndTime) {
            $res['ReservationEndTime'] = $this->reservationEndTime;
        }
        if (null !== $this->reservationIpsec) {
            $res['ReservationIpsec'] = $this->reservationIpsec;
        }
        if (null !== $this->reservationMaxConnections) {
            $res['ReservationMaxConnections'] = $this->reservationMaxConnections;
        }
        if (null !== $this->reservationOrderType) {
            $res['ReservationOrderType'] = $this->reservationOrderType;
        }
        if (null !== $this->reservationSpec) {
            $res['ReservationSpec'] = $this->reservationSpec;
        }
        if (null !== $this->reservationSsl) {
            $res['ReservationSsl'] = $this->reservationSsl;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reservationData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReservationEndTime'])) {
            $model->reservationEndTime = $map['ReservationEndTime'];
        }
        if (isset($map['ReservationIpsec'])) {
            $model->reservationIpsec = $map['ReservationIpsec'];
        }
        if (isset($map['ReservationMaxConnections'])) {
            $model->reservationMaxConnections = $map['ReservationMaxConnections'];
        }
        if (isset($map['ReservationOrderType'])) {
            $model->reservationOrderType = $map['ReservationOrderType'];
        }
        if (isset($map['ReservationSpec'])) {
            $model->reservationSpec = $map['ReservationSpec'];
        }
        if (isset($map['ReservationSsl'])) {
            $model->reservationSsl = $map['ReservationSsl'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
