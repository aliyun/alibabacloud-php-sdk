<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiskMonitorDataListRequest extends Model
{
    /**
     * @description The IDs of the disks. The value is a JSON array that contains multiple disk IDs. Separate the IDs with commas (,).
     *
     * @example ["d-bp67acfmxazb4p****","d-bp67acfmxazs5t****"]
     *
     * @var string
     */
    public $diskIds;

    /**
     * @description The end of the time range during which you want to query the near real-time monitoring data of the disks. Specify the time in the [ISO 8601](~~25696~~) standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time must be in UTC.
     *
     * @example 2022-06-01T05:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The number of entries per page. If you specify this parameter, both `MaxResults` and `NextToken` are used for a paged query.
     *
     * Default value: 10.
     * @example 10
     *
     * @var string
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in this request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example e71d8a535bd9c****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~354276~~) operation to query the list of regions that support CloudLens for EBS.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range during which you want to query the near real-time monitoring data of the disks. Specify the time in the [ISO 8601](~~25696~~) standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time must be in UTC.
     *
     * @example 2022-06-01T03:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The type of the monitoring data. Set the value to pro.
     *
     * pro: burst performance data, such as burst I/O operations.
     * @example pro
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'diskIds'    => 'DiskIds',
        'endTime'    => 'EndTime',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'regionId'   => 'RegionId',
        'startTime'  => 'StartTime',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskIds) {
            $res['DiskIds'] = $this->diskIds;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskMonitorDataListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskIds'])) {
            $model->diskIds = $map['DiskIds'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
