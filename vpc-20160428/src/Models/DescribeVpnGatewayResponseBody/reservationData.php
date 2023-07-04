<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewayResponseBody;

use AlibabaCloud\Tea\Model;

class reservationData extends Model
{
    /**
     * @description The custom tag of the VPN gateway.
     *
     * @example 2020-07-20T16:00:00Z
     *
     * @var string
     */
    public $reservationEndTime;

    /**
     * @description The bandwidth specification of the pending order. Unit: Mbit/s.
     *
     * @example enable
     *
     * @var string
     */
    public $reservationIpsec;

    /**
     * @description If the order type is **TEMP_UPGRADE** (temporary upgrade), this parameter indicates the time when the temporary upgrade expires.
     *
     * If the order type is **RENEWCHANGE** (specification change) or **RENEW** (renewal), this parameter indicates the time when the renewal or specification change takes effect.
     * @example 5
     *
     * @var int
     */
    public $reservationMaxConnections;

    /**
     * @description The IPsec-VPN status of the pending order. Valid values:
     *
     *   **enable**: enabled
     *   **disable**: disabled
     *
     * @example TEMP_UPGRADE
     *
     * @var string
     */
    public $reservationOrderType;

    /**
     * @description The SSL-VPN status of the pending order. Valid values:
     *
     *   **enable**: enabled
     *   **disable**: disabled
     *
     * @example 5
     *
     * @var string
     */
    public $reservationSpec;

    /**
     * @description The maximum number of concurrent SSL-VPN connections for the pending order.
     *
     * @example enable
     *
     * @var string
     */
    public $reservationSsl;

    /**
     * @description The type of the pending order. Valid values:
     *
     *   **RENEWCHANGE**: renewal with upgrade or downgrade
     *   **TEMP_UPGRADE**: temporary upgrade
     *   **RENEW**: renewal
     *
     * @example 1
     *
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
