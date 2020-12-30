<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewayResponseBody;

use AlibabaCloud\Tea\Model;

class reservationData extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $reservationOrderType;

    /**
     * @var string
     */
    public $reservationIpsec;

    /**
     * @var string
     */
    public $reservationSpec;

    /**
     * @var string
     */
    public $reservationSsl;

    /**
     * @var int
     */
    public $reservationMaxConnections;

    /**
     * @var string
     */
    public $reservationEndTime;
    protected $_name = [
        'status'                    => 'Status',
        'reservationOrderType'      => 'ReservationOrderType',
        'reservationIpsec'          => 'ReservationIpsec',
        'reservationSpec'           => 'ReservationSpec',
        'reservationSsl'            => 'ReservationSsl',
        'reservationMaxConnections' => 'ReservationMaxConnections',
        'reservationEndTime'        => 'ReservationEndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->reservationOrderType) {
            $res['ReservationOrderType'] = $this->reservationOrderType;
        }
        if (null !== $this->reservationIpsec) {
            $res['ReservationIpsec'] = $this->reservationIpsec;
        }
        if (null !== $this->reservationSpec) {
            $res['ReservationSpec'] = $this->reservationSpec;
        }
        if (null !== $this->reservationSsl) {
            $res['ReservationSsl'] = $this->reservationSsl;
        }
        if (null !== $this->reservationMaxConnections) {
            $res['ReservationMaxConnections'] = $this->reservationMaxConnections;
        }
        if (null !== $this->reservationEndTime) {
            $res['ReservationEndTime'] = $this->reservationEndTime;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ReservationOrderType'])) {
            $model->reservationOrderType = $map['ReservationOrderType'];
        }
        if (isset($map['ReservationIpsec'])) {
            $model->reservationIpsec = $map['ReservationIpsec'];
        }
        if (isset($map['ReservationSpec'])) {
            $model->reservationSpec = $map['ReservationSpec'];
        }
        if (isset($map['ReservationSsl'])) {
            $model->reservationSsl = $map['ReservationSsl'];
        }
        if (isset($map['ReservationMaxConnections'])) {
            $model->reservationMaxConnections = $map['ReservationMaxConnections'];
        }
        if (isset($map['ReservationEndTime'])) {
            $model->reservationEndTime = $map['ReservationEndTime'];
        }

        return $model;
    }
}
