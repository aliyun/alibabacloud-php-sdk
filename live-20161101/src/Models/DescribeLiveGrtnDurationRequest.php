<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveGrtnDurationRequest extends Model
{
    /**
     * @description The ID of the application. Separate multiple application IDs with commas (,). You can specify up to 30 application IDs. By default, the aggregated data of all applications is returned.
     *
     * @example 4346289a-a790-4869-9e23-22766d5e****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the billable region. Valid values:
     *
     *   CN: Chinese mainland
     *   OverSeas: countries and regions outside the Chinese mainland
     *   AP1: Asia Pacific 1, including Hong Kong (China), Macao (China), Taiwan (China), Japan, and other Southeast Asia countries and regions except Vietnam and Indonesia
     *   AP2: Asia Pacific 2, including Indonesia, South Korea, and Vietnam
     *   AP3: Asia Pacific 3, including Australia and New Zealand
     *   NA: North America, including US and Canada
     *   SA: South America, specifically meaning Brazil
     *   EU: Europe, including Ukraine, UK, France, Netherlands, Spain, Italy, Sweden, and Germany
     *   MEAA: Middle East and Africa, including South Africa, Oman, UAE, and Kuwait
     *
     * If you do not specify this parameter, data of all regions is aggregated and returned by default.
     *
     * @example CN
     *
     * @var string
     */
    public $area;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. The end time must be later than the start time. The time range that can be specified is greater than or equal to 5 minutes and less than or equal to 31 days.
     *
     * This parameter is required.
     *
     * @example 2022-10-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time granularity of the query. Unit: seconds. Valid values:
     *
     *   300
     *   3600
     *   86400
     *
     * If you specify an invalid value or do not specify this parameter, the default value 3600 is used.
     *
     * @example 3600
     *
     * @var string
     */
    public $interval;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2022-10-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'appId' => 'AppId',
        'area' => 'Area',
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
     * @return DescribeLiveGrtnDurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
