<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillTypeResponseBody\billTypeData;

use AlibabaCloud\Tea\Model;

class billTypeDataItem extends Model
{
    /**
     * @description The metering method. Valid values:
     *
     *   **hour_flow**: pay by hourly traffic
     *   **day_bandwidth**: pay by daily bandwidth
     *   **month\_95**: pay by monthly 95th percentile
     *   **month_avg_day_bandwidth**: pay by average daily peak bandwidth per month
     *   **month\_4th_day_bandwidth**: pay by 4th peak bandwidth per month
     *   **month_avg_day\_95**: pay by average daily 95th percentile per month
     *   **month\_95\_night_half**: pay by 95th percentile (50% off during nighttime)
     *   **hour_vas**: pay by value-added service per month
     *   **quic_hour_count**: pay by QUIC request per hour
     *   **hour_count**: pay by request per hour
     *   **rtlog_count_day**: pay by the number of real-time logs per day
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
     *   **flow**: network traffic and bandwidth
     *   **vas**: value-added services (HTTPS and requests for dynamic content)
     *   **websocket**: WebSocket
     *   **quic**: QUIC requests
     *   **rtlog2sls**: log entries delivered to Log Service in real time
     *
     * @example flow
     *
     * @var string
     */
    public $dimension;

    /**
     * @description The time when the metering method ends.
     *
     * @example 2018-10-31T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the service.
     *
     * @example dcdn
     *
     * @var string
     */
    public $product;

    /**
     * @description The time when the metering method takes effect.
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
