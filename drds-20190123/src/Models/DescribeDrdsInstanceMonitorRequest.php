<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeDrdsInstanceMonitorRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example drds*********
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The end time of the query. Specify the value in the UNIX timestamp format. The timestamp must be in UTC. Unit: ms.
     *
     * >  If the time range that you specify is less than 1 hour, the monitoring data that is collected in a 1-hour period before the end time is returned.
     * @example 1603209690000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The performance monitoring metrics. You can specify one or more metrics. Separate multiple metric names with commas (,).
     *
     * >  For more information about performance monitoring metrics, see [Monitor instances](~~186703~~).
     * @example cpu
     *
     * @var string
     */
    public $key;

    /**
     * @description The multiple of the default time interval that you want to use to collect monitoring data. By default, the system collects monitoring data of resources at an interval of 1 minute. If you set the value of this parameter to 2, the system collects monitoring data of the instance at an interval of 2 minutes.
     *
     * @example 1
     *
     * @var int
     */
    public $periodMultiple;

    /**
     * @description The ID of the region where the instance is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The start time of the query. Specify the value in the UNIX timestamp format. The timestamp must be in UTC. Unit: ms.
     *
     * @example 1603123290000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
        'endTime'        => 'EndTime',
        'key'            => 'Key',
        'periodMultiple' => 'PeriodMultiple',
        'regionId'       => 'RegionId',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->periodMultiple) {
            $res['PeriodMultiple'] = $this->periodMultiple;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsInstanceMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['PeriodMultiple'])) {
            $model->periodMultiple = $map['PeriodMultiple'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
