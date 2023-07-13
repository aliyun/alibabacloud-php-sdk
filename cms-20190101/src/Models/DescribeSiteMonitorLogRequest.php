<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSiteMonitorLogRequest extends Model
{
    /**
     * @description The city identification code.
     *
     * @example 546
     *
     * @var string
     */
    public $city;

    /**
     * @description The end of the time range to query data. The following formats are supported:
     *
     *   UNIX timestamp: the number of milliseconds that have elapsed since 00:00:00 Thursday, January 1, 1970
     *   UTC time: the UTC time that follows the YYYY-MM-DDThh:mm:ssZ format
     *
     * > We recommend that you use UNIX timestamps to prevent time zone-related issues.
     * @example 1638422475687
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The filter condition.
     *
     * You can specify a simple expression, for example, `TotalTime>100`. In this case, the operation returns only the data for instant test tasks whose total response time exceeds 100 milliseconds.
     * @example TotalTime>100
     *
     * @var string
     */
    public $filter;

    /**
     * @description The carrier identification code.
     *
     * @example 465
     *
     * @var string
     */
    public $isp;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 1440.
     *
     * @example 1000
     *
     * @var int
     */
    public $length;

    /**
     * @description The name of the metric.
     *
     * Only the `ProbeLog` metric is supported.
     * @example ProbeLog
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The token that is used to initiate the next request if the response of the current request is truncated. You can use the token to initiate another request and obtain the remaining records.``
     *
     * @example IWBjqMYSy0is7zSMGu16****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The start of the time range to query data. The following formats are supported:
     *
     *   UNIX timestamp: the number of milliseconds that have elapsed since 00:00:00 Thursday, January 1, 1970
     *   UTC time: the UTC time that follows the YYYY-MM-DDThh:mm:ssZ format
     *
     * >
     *   The specified time range includes the end time and excludes the start time. The `start time` must be earlier than the `end time`.
     *   We recommend that you use UNIX timestamps to prevent time zone-related issues.
     *
     * @example 1638422474389
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The IDs of the instant test tasks. Separate multiple task IDs with commas (,).
     *
     * @example afa5c3ce-f944-4363-9edb-ce919a29****
     *
     * @var string
     */
    public $taskIds;
    protected $_name = [
        'city'       => 'City',
        'endTime'    => 'EndTime',
        'filter'     => 'Filter',
        'isp'        => 'Isp',
        'length'     => 'Length',
        'metricName' => 'MetricName',
        'nextToken'  => 'NextToken',
        'regionId'   => 'RegionId',
        'startTime'  => 'StartTime',
        'taskIds'    => 'TaskIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSiteMonitorLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskIds'])) {
            $model->taskIds = $map['TaskIds'];
        }

        return $model;
    }
}
