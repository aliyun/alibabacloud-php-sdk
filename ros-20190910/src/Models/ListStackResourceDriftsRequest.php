<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ListStackResourceDriftsRequest extends Model
{
    /**
     * @description The maximum number of results to be returned with a single call when the NextToken parameter is used for the query.
     *
     * Default value: 50.
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The query token. Set this parameter to the NextToken value returned in the last API call.
     *
     * @example AAAAAdDWBF2****w==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID of the stack. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example MODIFIED
     *
     * @var string[]
     */
    public $resourceDriftStatus;

    /**
     * @description The ID of the stack.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;
    protected $_name = [
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'regionId'            => 'RegionId',
        'resourceDriftStatus' => 'ResourceDriftStatus',
        'stackId'             => 'StackId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceDriftStatus) {
            $res['ResourceDriftStatus'] = $this->resourceDriftStatus;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackResourceDriftsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceDriftStatus'])) {
            if (!empty($map['ResourceDriftStatus'])) {
                $model->resourceDriftStatus = $map['ResourceDriftStatus'];
            }
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
