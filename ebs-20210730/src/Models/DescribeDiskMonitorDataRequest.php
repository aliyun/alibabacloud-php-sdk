<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiskMonitorDataRequest extends Model
{
    /**
     * @description The ID of the disk.
     *
     * @example d-bp67acfmxazb4p****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The end of the time range during which you want to query the near real-time monitoring data of the disk. Specify the time in the [ISO 8601](~~25696~~) standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time must be in UTC.
     *
     * @example 2022-06-01T05:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The interval at which the near real-time monitoring data is collected. Unit: seconds. Valid values:
     *
     *   5
     *   60
     *
     * Default value: 5.
     * @example 5
     *
     * @var int
     */
    public $period;

    /**
     * @description The region ID of the disk.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range during which you want to query the near real-time monitoring data of the disk. Specify the time in the [ISO 8601](~~25696~~) standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time must be in UTC.
     *
     * @example 2022-06-01T03:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The type of the monitoring data. Valid values:
     *
     *   basic: baseline performance data.
     *   pro: burst performance data, such as burst I/O operations.
     *
     * @example basic
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'diskId'    => 'DiskId',
        'endTime'   => 'EndTime',
        'period'    => 'Period',
        'regionId'  => 'RegionId',
        'startTime' => 'StartTime',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskMonitorDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
