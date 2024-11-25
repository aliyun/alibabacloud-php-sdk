<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\CreateRCDeploymentSetRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateRCDeploymentSetRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCz****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The deployment set name. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with `http://` or `https://`. The name can contain letters, digits, colons (.), underscores (_), and hyphens (-).
     *
     * @example deployment_test
     *
     * @var string
     */
    public $deploymentSetName;

    /**
     * @description The description of the deployment set. The value must be 2 to 256 characters in length and cannot start with http:// or https://.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The number of groups in the deployment set. Valid values: 1 to 7.
     *
     * >  This parameter takes effect only when `Strategy is set to AvailabilityGroup`.
     * @example 3
     *
     * @var int
     */
    public $groupCount;

    /**
     * @description The emergency solution to use in the scenario in which instances in the deployment set cannot be evenly distributed to different zones due to resource insufficiency after the instances failover. Valid values:
     *
     *   **CancelMembershipAndStart**: removes the instances from the deployment set and restarts the instances immediately after the failover is complete.
     *   **KeepStopped**: does not remove the instances from the deployment set and keeps the instances in the Stopped state.
     *
     * Default value: CancelMembershipAndStart.
     * @example CancelMembershipAndStart
     *
     * @var string
     */
    public $onUnableToRedeployFailedInstance;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The deployment strategy. Valid values:
     *
     *   **Availability**: high-availability strategy
     *   **AvailabilityGroup**: high-availability group strategy
     *   **LowLatency**: low latency strategy
     *
     * Default value: Availability.
     * @example Availability
     *
     * @var string
     */
    public $strategy;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clientToken'                      => 'ClientToken',
        'deploymentSetName'                => 'DeploymentSetName',
        'description'                      => 'Description',
        'groupCount'                       => 'GroupCount',
        'onUnableToRedeployFailedInstance' => 'OnUnableToRedeployFailedInstance',
        'regionId'                         => 'RegionId',
        'strategy'                         => 'Strategy',
        'tag'                              => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deploymentSetName) {
            $res['DeploymentSetName'] = $this->deploymentSetName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupCount) {
            $res['GroupCount'] = $this->groupCount;
        }
        if (null !== $this->onUnableToRedeployFailedInstance) {
            $res['OnUnableToRedeployFailedInstance'] = $this->onUnableToRedeployFailedInstance;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRCDeploymentSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeploymentSetName'])) {
            $model->deploymentSetName = $map['DeploymentSetName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupCount'])) {
            $model->groupCount = $map['GroupCount'];
        }
        if (isset($map['OnUnableToRedeployFailedInstance'])) {
            $model->onUnableToRedeployFailedInstance = $map['OnUnableToRedeployFailedInstance'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
