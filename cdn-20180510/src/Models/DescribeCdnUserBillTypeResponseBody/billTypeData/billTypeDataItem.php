<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillTypeResponseBody\billTypeData;

use AlibabaCloud\Tea\Model;

class billTypeDataItem extends Model
{
    /**
     * @description The metering method.
     *
     * > If the metering method is suffixed with \\*\\*_overseas\\*\\*, the billable region is outside the Chinese mainland. For example, "BillType": "month_avg_day_bandwidth_overseas" indicates that the metering method is pay by average daily peak bandwidth per month in a billable region outside the Chinese mainland.
     *
     * Valid values:
     *
     *   hour_flow: pay by hourly data transfer
     *   day_bandwidth: pay by daily bandwidth
     *   month_95: pay by monthly 95th percentile bandwidth
     *   month_avg_day_bandwidth: pay by average daily peak bandwidth per month
     *   month_4th_day_bandwidth: pay by monthly 4th peak bandwidth
     *   month_avg_day_95: pay by average daily 95th percentile bandwidth per month
     *   month_95_night_half: pay by 95th percentile bandwidth with 50% off from 00:00 to 08:00
     *   hour_vas: pay by value-added services per hour
     *   quic_hour_count: pay by hourly QUIC requests
     *   day_count: pay by daily requests
     *   hour_count: pay by hourly requests
     *   day_95: pay by daily 95th percentile bandwidth
     *
     * @example month_avg_day_bandwidth_overseas
     *
     * @var string
     */
    public $billType;

    /**
     * @description The billing cycle.
     *
     * @example month
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @description The dimension. Valid values:
     *
     *   flow: traffic and bandwidth
     *   vas: value-added services (HTTPS and requests for dynamic content)
     *   quic: the number of QUIC requests
     *   websocket: the WebSocket communications protocol
     *   rtlog2sls: log entries delivered to Log Service in real time
     *   stationflow: traffic over the internal network
     *
     * @example flow
     *
     * @var string
     */
    public $dimension;

    /**
     * @description The time when the metering method ended.
     *
     * @example 2018-10-31T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the product.
     *
     * @example cdn
     *
     * @var string
     */
    public $product;

    /**
     * @description The time when the metering method started.
     *
     * @example 2018-10-30T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'billType'     => 'BillType',
        'billingCycle' => 'BillingCycle',
        'dimension'    => 'Dimension',
        'endTime'      => 'EndTime',
        'product'      => 'Product',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billTypeDataItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
