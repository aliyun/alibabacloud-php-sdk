<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiskEventsRequest extends Model
{
    /**
     * @description The type of the disk. Valid values:
     *
     *   cloud_efficiency: ultra disk.
     *   cloud_ssd: standard SSD.
     *   cloud_essd: enhanced SSD (ESSD).
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @description The ID of the disk.
     *
     * @example d-bp67acfmxazb4p****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The end of the time range to query. Specify the time in the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2022-06-01T05:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The maximum number of entries per page. Valid values: 1 to 100.
     *
     * Default values:
     *
     *   If this parameter is not specified or is set to a value smaller than 10, the default value is 10.
     *   If this parameter is set to a value greater than 100, the default value is 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in this request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of `NextToken`.
     *
     * @example caeba0bbb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID of the disk. You can call the [DescribeRegions](~~354276~~) operation to query the list of regions that support CloudLens for EBS.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2022-06-01T03:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The event type. Set the value to DataNeedProtect, which indicates that the disk data needs to be protected.
     *
     * @example DataNeedProtect
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'diskCategory' => 'DiskCategory',
        'diskId'       => 'DiskId',
        'endTime'      => 'EndTime',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'regionId'     => 'RegionId',
        'startTime'    => 'StartTime',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
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
     * @return DescribeDiskEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
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
