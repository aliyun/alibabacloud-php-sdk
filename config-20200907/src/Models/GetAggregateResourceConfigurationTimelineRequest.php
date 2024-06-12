<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetAggregateResourceConfigurationTimelineRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-5885626622af0008****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The end of the time range to query. The default value indicates the time when the GetAggregateResourceConfigurationTimeline operation is called. Unit: milliseconds.
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
     * @description The `token` that is used to initiate the next request if the response of the current request is truncated. You can use the token to initiate another request and obtain the remaining records.
     *
     * @example IWBjqMYSy0is7zSMGu16****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region in which the resource resides.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource in the account group belongs.
     *
     * @example 100931896542****
     *
     * @var int
     */
    public $resourceAccountId;

    /**
     * @description The resource ID.
     *
     * This parameter is required.
     * @example new-bucket
     *
     * @var string
     */
    public $resourceId;

    /**
     * @deprecated
     *
     * @var int
     */
    public $resourceOwnerId;

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
     * @description The beginning of the time range to query. By default, Cloud Config retrieves the configuration changes in the last 30 days for the specified resource. Unit: milliseconds.
     *
     * @example 1623211156000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'aggregatorId'      => 'AggregatorId',
        'endTime'           => 'EndTime',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'region'            => 'Region',
        'resourceAccountId' => 'ResourceAccountId',
        'resourceId'        => 'ResourceId',
        'resourceOwnerId'   => 'ResourceOwnerId',
        'resourceType'      => 'ResourceType',
        'startTime'         => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceAccountId) {
            $res['ResourceAccountId'] = $this->resourceAccountId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
     * @return GetAggregateResourceConfigurationTimelineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceAccountId'])) {
            $model->resourceAccountId = $map['ResourceAccountId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
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
