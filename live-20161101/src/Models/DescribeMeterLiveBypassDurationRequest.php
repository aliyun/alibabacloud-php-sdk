<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMeterLiveBypassDurationRequest extends Model
{
    /**
     * @description The ID of the application. You can view the application ID on the [Applications](https://help.aliyun.com/document_detail/2355593.html) page in the ApsaraVideo Real-time Communication (ARTC) section of the ApsaraVideo Live console.
     *
     * This parameter is required.
     *
     * @example 4346289a-a790-4869-9e23-22766d5e****
     *
     * @var string
     */
    public $appId;

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
     * @example 86400
     *
     * @var string
     */
    public $interval;

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
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMeterLiveBypassDurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
