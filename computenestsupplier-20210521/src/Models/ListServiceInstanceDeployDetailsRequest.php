<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceDeployDetailsRequest\filter;
use AlibabaCloud\Tea\Model;

class ListServiceInstanceDeployDetailsRequest extends Model
{
    /**
     * @description The time zone.
     *
     * Reference Format: "+08:00"
     *
     * Valid Range: "-12:59" to "+13:00"
     *
     * @example +08:00
     *
     * @var string
     */
    public $cycleTimeZone;

    /**
     * @description Determines the time period over which data is aggregated. If no aggregation dimension is specified, the query defaults to providing detailed, unaggregated results.
     *
     * Optional Values:
     *
     * - Year
     * - Month
     * - Day
     * - All
     *
     * @example Month
     *
     * @var string
     */
    public $cycleType;

    /**
     * @description The dimension names. (Equivalent to SQL\\"s GROUP BY Clause)
     * Optional Values:
     *
     * - UserId
     * - ServiceId
     * - ServiceVersion
     * - ServiceInstanceId
     * - DeploySucceeded
     * - ErrorType
     * - ErrorCode
     *
     * @var string[]
     */
    public $dimension;

    /**
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time must be in UTC.
     *
     * @example 2024-12-31T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The filter.
     *
     * @var filter[]
     */
    public $filter;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example AAAAAZbOYA+x9UgM6xrgcMqFUjk=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time must be in UTC.
     *
     * @example 2024-08-25T02:23:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'cycleTimeZone' => 'CycleTimeZone',
        'cycleType' => 'CycleType',
        'dimension' => 'Dimension',
        'endTime' => 'EndTime',
        'filter' => 'Filter',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cycleTimeZone) {
            $res['CycleTimeZone'] = $this->cycleTimeZone;
        }
        if (null !== $this->cycleType) {
            $res['CycleType'] = $this->cycleType;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->filter) {
            $res['Filter'] = [];
            if (null !== $this->filter && \is_array($this->filter)) {
                $n = 0;
                foreach ($this->filter as $item) {
                    $res['Filter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceInstanceDeployDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CycleTimeZone'])) {
            $model->cycleTimeZone = $map['CycleTimeZone'];
        }
        if (isset($map['CycleType'])) {
            $model->cycleType = $map['CycleType'];
        }
        if (isset($map['Dimension'])) {
            if (!empty($map['Dimension'])) {
                $model->dimension = $map['Dimension'];
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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

        return $model;
    }
}
