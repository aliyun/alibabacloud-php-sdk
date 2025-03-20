<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DescribeDDoSL7QpsListRequest extends Model
{
    /**
     * @description The end time of the query.
     *
     * The date format follows ISO8601 notation and uses UTC+0, formatted as yyyy-MM-ddTHH:mm:ssZ. The maximum span between the start and end times is 31 days.
     *
     * If this parameter is not set, the current time will be used as the end time of the query.
     *
     * @example 2023-04-19T19:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time granularity of the queried data, in seconds.
     *
     * Depending on the maximum time span of a single query, this parameter supports values of 60 (1 minute), 300 (5 minutes), 1800 (half an hour), and 3600 (1 hour).
     *
     * This parameter is required.
     *
     * @example 300
     *
     * @var int
     */
    public $interval;

    /**
     * @description Record ID, which can be obtained by calling the [ListRecords](~~ListRecords~~) interface.
     *
     * @example 86510927836942****
     *
     * @var int
     */
    public $recordId;

    /**
     * @description Site ID, which can be obtained by calling the [ListSites](~~ListSites~~) interface.
     *
     * This parameter is required.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The start time of the query.
     *
     * The date format follows ISO8601 notation and uses UTC+0, formatted as yyyy-MM-ddTHH:mm:ssZ.
     *
     * This parameter is required.
     *
     * @example 2023-04-19T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'recordId' => 'RecordId',
        'siteId' => 'SiteId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDDoSL7QpsListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
