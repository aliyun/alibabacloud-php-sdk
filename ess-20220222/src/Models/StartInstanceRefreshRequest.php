<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\StartInstanceRefreshRequest\desiredConfiguration;
use AlibabaCloud\Tea\Model;

class StartInstanceRefreshRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [Ensure idempotence](https://help.aliyun.com/document_detail/25965.html).
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The desired configurations of the instance refresh task.
     *
     * >
     *
     *   When you call this operation, you must specify one of the following parameters: ScalingConfigurationId and ImageId.
     *
     *   Instances whose configurations match the desired configurations of the task are ignored during instance refresh.
     *
     * @var desiredConfiguration
     */
    public $desiredConfiguration;

    /**
     * @description The ratio of instances that can exceed the upper limit of the scaling group capacity to all instances in the scaling group during instance refresh. Valid values: 100 to 200. Default value: 120.
     *
     * >  If you set MinHealthyPercentage and MaxHealthyPercentage to 100, Auto Scaling refreshes the configurations of one instance each time the instance refresh task starts.
     *
     * @example 100
     *
     * @var int
     */
    public $maxHealthyPercentage;

    /**
     * @description The ratio of instances that are in the In Service state to all instances in the scaling group during instance refresh. Valid values: 0 to 100. Default value: 80.
     *
     * @example 80
     *
     * @var int
     */
    public $minHealthyPercentage;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the scaling group.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The ID of the scaling group.
     *
     * This parameter is required.
     *
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description Specifies whether to skip instances that match the desired scaling configuration.
     *
     * >  The system determines the match based on the ID of the desired scaling configuration rather than individual configuration items.
     *
     * Valid values:
     *
     *   true: skips instances that match the desired scaling configuration. When you initiate an instance refresh task, the system checks the configurations of all instances. The refresh operation is skipped for instances created based on the desired scaling configuration.
     *   false: does not skip instances that match the desired scaling configuration. When an instance refresh task is initiated, all instances in the scaling group at the time of initiation are refreshed.
     *
     * Default value: true.
     *
     * @example true
     *
     * @var bool
     */
    public $skipMatching;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'desiredConfiguration' => 'DesiredConfiguration',
        'maxHealthyPercentage' => 'MaxHealthyPercentage',
        'minHealthyPercentage' => 'MinHealthyPercentage',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId' => 'ScalingGroupId',
        'skipMatching' => 'SkipMatching',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->desiredConfiguration) {
            $res['DesiredConfiguration'] = null !== $this->desiredConfiguration ? $this->desiredConfiguration->toMap() : null;
        }
        if (null !== $this->maxHealthyPercentage) {
            $res['MaxHealthyPercentage'] = $this->maxHealthyPercentage;
        }
        if (null !== $this->minHealthyPercentage) {
            $res['MinHealthyPercentage'] = $this->minHealthyPercentage;
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
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->skipMatching) {
            $res['SkipMatching'] = $this->skipMatching;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartInstanceRefreshRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DesiredConfiguration'])) {
            $model->desiredConfiguration = desiredConfiguration::fromMap($map['DesiredConfiguration']);
        }
        if (isset($map['MaxHealthyPercentage'])) {
            $model->maxHealthyPercentage = $map['MaxHealthyPercentage'];
        }
        if (isset($map['MinHealthyPercentage'])) {
            $model->minHealthyPercentage = $map['MinHealthyPercentage'];
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
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['SkipMatching'])) {
            $model->skipMatching = $map['SkipMatching'];
        }

        return $model;
    }
}
