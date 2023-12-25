<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DescribeLifecycleActionsRequest extends Model
{
    /**
     * @description The status of the lifecycle action. Valid values:
     *
     *   If a lifecycle action is in the Pending state, Elastic Compute Service (ECS) instances are waiting to be added to a scaling group or waiting to be removed from a scaling group.
     *   If a lifecycle action is in the Timeout state, the lifecycle hook that triggers the lifecycle action ends, and ECS instances are added to or removed from the scaling group.
     *   If a lifecycle action is in the Completed state, you manually end the lifecycle hook that triggers the lifecycle action ahead of schedule.
     *
     * @example Pending
     *
     * @var string
     */
    public $lifecycleActionStatus;

    /**
     * @description The maximum number of entries to return on each page. Valid values: 1 to 50.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to specify the lifecycle action from which the query starts.
     *
     * For example, after the first 10 lifecycle actions are queried, the query starts from the 11th lifecycle action. Set this parameter to the NextToken value that is returned in the previous API call. If you do not specify this parameter, the query starts from the beginning.
     * @example AAAAAcSz4VTb1Nq****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the scaling group.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The ID of the scaling activity.
     *
     * @example asa-bp17mug9t0pegagw****
     *
     * @var string
     */
    public $scalingActivityId;
    protected $_name = [
        'lifecycleActionStatus' => 'LifecycleActionStatus',
        'maxResults'            => 'MaxResults',
        'nextToken'             => 'NextToken',
        'ownerId'               => 'OwnerId',
        'regionId'              => 'RegionId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'scalingActivityId'     => 'ScalingActivityId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lifecycleActionStatus) {
            $res['LifecycleActionStatus'] = $this->lifecycleActionStatus;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->scalingActivityId) {
            $res['ScalingActivityId'] = $this->scalingActivityId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLifecycleActionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LifecycleActionStatus'])) {
            $model->lifecycleActionStatus = $map['LifecycleActionStatus'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ScalingActivityId'])) {
            $model->scalingActivityId = $map['ScalingActivityId'];
        }

        return $model;
    }
}
