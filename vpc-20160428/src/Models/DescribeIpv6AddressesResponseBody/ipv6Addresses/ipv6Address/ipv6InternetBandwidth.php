<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponseBody\ipv6Addresses\ipv6Address;

use AlibabaCloud\Tea\Model;

class ipv6InternetBandwidth extends Model
{
    /**
     * @description The exclusive Internet bandwidth of the IPv6 address. Unit: Mbit/s.
     *
     * @example 5
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The status of the Internet bandwidth of the IPv6 address. Valid values:
     *
     *   **Normal**
     *   **FinancialLocked**
     *   **SecurityLocked**
     *
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description Indicates whether renewal data is included.
     *
     *   **false**
     *   **true** This parameter returns **true** only if **IncludeReservationData** is set to **true** and some orders have not taken effect.
     *
     * @example false
     *
     * @var bool
     */
    public $hasReservationData;

    /**
     * @description The billing method of the Internet bandwidth of the IPv6 address.
     *
     * Only **PostPaid** may be returned, which indicates the pay-as-you-go billing method.
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The billing method of the Internet bandwidth of the IPv6 address. Valid values:
     *
     *   **PayByTraffic**: pay-by-data-transfer
     *   **PayByBandwidth**: pay-by-bandwidth
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The instance ID of the Internet bandwidth of the IPv6 address.
     *
     * @example ipv6bw-hp3b35oq1fj50kbv****
     *
     * @var string
     */
    public $ipv6InternetBandwidthId;

    /**
     * @description The time when the renewal took effect. The time is displayed in the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2021-05-23T16:00:00Z
     *
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @description The maximum bandwidth after the renewal takes effect. Unit: Mbit/s.
     *
     * @example 12
     *
     * @var int
     */
    public $reservationBandwidth;

    /**
     * @description The metering method that is used after the renewal takes effect.
     *
     *   **PayByTraffic**: pay-by-data-transfer
     *   **PayByBandwidth**: pay-by-bandwidth
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @description The type of the renewal order. Only **RENEW** may be returned, which indicates that the order is placed for service renewal.
     *
     * @example RENEW
     *
     * @var string
     */
    public $reservationOrderType;
    protected $_name = [
        'bandwidth'                     => 'Bandwidth',
        'businessStatus'                => 'BusinessStatus',
        'hasReservationData'            => 'HasReservationData',
        'instanceChargeType'            => 'InstanceChargeType',
        'internetChargeType'            => 'InternetChargeType',
        'ipv6InternetBandwidthId'       => 'Ipv6InternetBandwidthId',
        'reservationActiveTime'         => 'ReservationActiveTime',
        'reservationBandwidth'          => 'ReservationBandwidth',
        'reservationInternetChargeType' => 'ReservationInternetChargeType',
        'reservationOrderType'          => 'ReservationOrderType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->hasReservationData) {
            $res['HasReservationData'] = $this->hasReservationData;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->ipv6InternetBandwidthId) {
            $res['Ipv6InternetBandwidthId'] = $this->ipv6InternetBandwidthId;
        }
        if (null !== $this->reservationActiveTime) {
            $res['ReservationActiveTime'] = $this->reservationActiveTime;
        }
        if (null !== $this->reservationBandwidth) {
            $res['ReservationBandwidth'] = $this->reservationBandwidth;
        }
        if (null !== $this->reservationInternetChargeType) {
            $res['ReservationInternetChargeType'] = $this->reservationInternetChargeType;
        }
        if (null !== $this->reservationOrderType) {
            $res['ReservationOrderType'] = $this->reservationOrderType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6InternetBandwidth
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['HasReservationData'])) {
            $model->hasReservationData = $map['HasReservationData'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['Ipv6InternetBandwidthId'])) {
            $model->ipv6InternetBandwidthId = $map['Ipv6InternetBandwidthId'];
        }
        if (isset($map['ReservationActiveTime'])) {
            $model->reservationActiveTime = $map['ReservationActiveTime'];
        }
        if (isset($map['ReservationBandwidth'])) {
            $model->reservationBandwidth = $map['ReservationBandwidth'];
        }
        if (isset($map['ReservationInternetChargeType'])) {
            $model->reservationInternetChargeType = $map['ReservationInternetChargeType'];
        }
        if (isset($map['ReservationOrderType'])) {
            $model->reservationOrderType = $map['ReservationOrderType'];
        }

        return $model;
    }
}
