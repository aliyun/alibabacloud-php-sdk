<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetResourceComplianceTimelineRequest extends Model
{
    /**
     * @description The timestamp that specifies the end of the time range to query. The default value is the time when the GetResourceComplianceTimeline operation is called. Unit: milliseconds.
     *
     * @example 1625821156000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The maximum number of entries to return for a single request. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to initiate the next request. If the response of the current request is truncated, this token is used to initiate another request and obtain the remaining entries.
     *
     * @example IWBjqMYSy0is7zSMGu16****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region where the resource resides.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the resource.
     *
     * This parameter is required.
     * @example new-bucket
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource.
     *
     * This parameter is required.
     * @example ACS::OSS::Bucket
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The timestamp that specifies the beginning of the time range to query. By default, Cloud Config retrieves the compliance evaluations in the last 30 days for the specified resource. Unit: milliseconds.
     *
     * @example 1623211156000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'      => 'EndTime',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'region'       => 'Region',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceComplianceTimelineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
