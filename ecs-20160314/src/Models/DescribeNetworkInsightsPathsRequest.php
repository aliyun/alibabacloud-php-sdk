<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\Tea\Model;

class DescribeNetworkInsightsPathsRequest extends Model
{
    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string[]
     */
    public $networkInsightsPathId;

    /**
     * @var string
     */
    public $networkPathFound;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'dryRun'                => 'DryRun',
        'maxResults'            => 'MaxResults',
        'networkInsightsPathId' => 'NetworkInsightsPathId',
        'networkPathFound'      => 'NetworkPathFound',
        'nextToken'             => 'NextToken',
        'regionId'              => 'RegionId',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'status'                => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->networkInsightsPathId) {
            $res['NetworkInsightsPathId'] = $this->networkInsightsPathId;
        }
        if (null !== $this->networkPathFound) {
            $res['NetworkPathFound'] = $this->networkPathFound;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetworkInsightsPathsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NetworkInsightsPathId'])) {
            if (!empty($map['NetworkInsightsPathId'])) {
                $model->networkInsightsPathId = $map['NetworkInsightsPathId'];
            }
        }
        if (isset($map['NetworkPathFound'])) {
            $model->networkPathFound = $map['NetworkPathFound'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
