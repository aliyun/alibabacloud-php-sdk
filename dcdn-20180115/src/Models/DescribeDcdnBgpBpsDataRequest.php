<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnBgpBpsDataRequest extends Model
{
    /**
     * @description The name of the device. If you specify this parameter, the data of the device is returned. Otherwise, the data of all devices is returned.
     *
     * @example devicename
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The port of the device. If you specify this parameter, the data of the port is returned. Otherwise, the data of all ports is returned. This parameter takes effect only when the **DeviceName** parameter is specified.
     *
     * @example 123
     *
     * @var string
     */
    public $devicePort;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2018-11-30T00:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The data collection interval. Unit: seconds. Valid values: 300 and 3600. Default value: 300. The default value of 300 seconds is equal to 5 minutes. The value of this parameter varies based on the time range from the specified start time to the specified end time.
     *
     * @example 300
     *
     * @var string
     */
    public $interval;

    /**
     * @description The ISPs. If you need to specify multiple ISPs, separate them with commas (,). If you specify multiple ISPs, the data for the ISPs is aggregated. If you do not specify this parameter, the operation returns the data for all the ISPs.
     *
     * Valid values:
     *
     *   cu: China Unicom
     *   cmi: China Mobile
     *   ct: China Telecom
     *
     * @example cu
     *
     * @var string
     */
    public $isp;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * If you do not set this parameter, data collected in the last 24 hours is queried.
     * @example 2018-11-29T00:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'devicePort' => 'DevicePort',
        'endTime'    => 'EndTime',
        'interval'   => 'Interval',
        'isp'        => 'Isp',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->devicePort) {
            $res['DevicePort'] = $this->devicePort;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnBgpBpsDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DevicePort'])) {
            $model->devicePort = $map['DevicePort'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
