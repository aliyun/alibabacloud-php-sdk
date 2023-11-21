<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponseBody\vpnGateways\vpnGateway;

use AlibabaCloud\Tea\Model;

class reservationData extends Model
{
    /**
     * @description If the order type is **TEMP_UPGRADE** (temporary upgrade), this parameter specifies the time when the temporary upgrade expires.
     *
     * If the order type is **RENEWCHANGE** (renewal with a specification change) or **RENEW** (renewal), this parameter indicates the time when the renewal or renewal with a specification change takes effect.
     * @example 2021-07-20T16:00:00Z
     *
     * @var string
     */
    public $reservationEndTime;

    /**
     * @description The IPsec-VPN status of the order that has not taken effect. Valid values:
     *
     *   **enable**
     *   **disable**
     *
     * @example enable
     *
     * @var string
     */
    public $reservationIpsec;

    /**
     * @description The maximum number of concurrent SSL-VPN connections of the pending order.
     *
     * @example 5
     *
     * @var int
     */
    public $reservationMaxConnections;

    /**
     * @description The type of the order that has not taken effect. Valid values:
     *
     *   **RENEWCHANGE**: renewal with upgrade or downgrade
     *   **TEMP_UPGRADE**: temporary upgrade
     *   **RENEW**: renewal
     *
     * @example TEMP_UPGRADE
     *
     * @var string
     */
    public $reservationOrderType;

    /**
     * @description The bandwidth of the pending order. Unit: Mbit/s.
     *
     * @example 5
     *
     * @var string
     */
    public $reservationSpec;

    /**
     * @description The SSL-VPN status of the order that has not taken effect. Valid values:
     *
     *   **enable**
     *   **disable**
     *
     * @example enable
     *
     * @var string
     */
    public $reservationSsl;

    /**
     * @description The status of the order that has not taken effect.
     *
     *   **1**: indicates that the order is an order for renewal or renewal with a specification change and the order has not taken effect.
     *   **2**: indicates that the order is an order for temporary upgrade and the order has taken effect. After the temporary upgrade expires, the system restores the VPN gateway to its previous specifications. In this case, **ReservationIpsec**, **ReservationMaxConnections**, **ReservationSpec**, and **ReservationSsl** indicate the previous specification.
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
