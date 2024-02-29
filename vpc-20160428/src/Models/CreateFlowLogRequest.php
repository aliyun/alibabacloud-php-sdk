<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateFlowLogRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateFlowLogRequest extends Model
{
    /**
     * @description The sampling interval of the flow log. Unit: seconds. Valid values: **1**, **5**, and **10** (default).
     *
     * @example 10
     *
     * @var int
     */
    public $aggregationInterval;

    /**
     * @description The description of the flow log.
     *
     * The description must be 1 to 256 characters in length and cannot start with `http://` or `https://`.
     * @example This is my Flowlog.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the flow log.
     *
     * The name must be 1 to 128 characters in length and cannot start with `http://` or `https://`.
     * @example myFlowlog
     *
     * @var string
     */
    public $flowLogName;

    /**
     * @description The name of the Logstore that stores the captured traffic data.
     *
     *   The name can contain only lowercase letters, digits, hyphens (-), and underscores (\_).
     *   The name must start and end with a lowercase letter or a digit.
     *   The name must be 3 to 63 characters in length.
     *
     * @example FlowLogStore
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The name of the project that stores the captured traffic data.
     *
     *   The name can contain only lowercase letters, digits, and hyphens (-).
     *   The name must start and end with a lowercase letter or a digit.
     *   The name must be 3 to 63 characters in length.
     *
     * @example FlowLogProject
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The ID of the region where you want to create the flow log. You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxazdjdhd****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the resource whose traffic you want to capture.
     *
     * @example eni-askldfas****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The type of the resource whose traffic you want to capture. Valid values:
     *
     *   **NetworkInterface**: elastic network interface (ENI)
     *   **VSwitch**: all ENIs in a vSwitch
     *   **VPC**: all ENIs in a virtual private cloud (VPC)
     *
     * @example NetworkInterface
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag of the resource.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The scope of the traffic that you want to capture. Valid values:
     *
     *   **all**: all traffic.
     *   **internetGateway**: Internet traffic.
     *
     * @var string[]
     */
    public $trafficPath;

    /**
     * @description The type of traffic that you want to capture. Valid values:
     *
     *   **All**: all traffic
     *   **Allow**: traffic that is allowed
     *   **Drop**: traffic that is rejected
     *
     * @example All
     *
     * @var string
     */
    public $trafficType;
    protected $_name = [
        'aggregationInterval'  => 'AggregationInterval',
        'description'          => 'Description',
        'flowLogName'          => 'FlowLogName',
        'logStoreName'         => 'LogStoreName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'projectName'          => 'ProjectName',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceId'           => 'ResourceId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resourceType'         => 'ResourceType',
        'tag'                  => 'Tag',
        'trafficPath'          => 'TrafficPath',
        'trafficType'          => 'TrafficType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregationInterval) {
            $res['AggregationInterval'] = $this->aggregationInterval;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->flowLogName) {
            $res['FlowLogName'] = $this->flowLogName;
        }
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (null !== $this->trafficPath) {
            $res['TrafficPath'] = $this->trafficPath;
        }
        if (null !== $this->trafficType) {
            $res['TrafficType'] = $this->trafficType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlowLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregationInterval'])) {
            $model->aggregationInterval = $map['AggregationInterval'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FlowLogName'])) {
            $model->flowLogName = $map['FlowLogName'];
        }
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
        if (isset($map['TrafficPath'])) {
            if (!empty($map['TrafficPath'])) {
                $model->trafficPath = $map['TrafficPath'];
            }
        }
        if (isset($map['TrafficType'])) {
            $model->trafficType = $map['TrafficType'];
        }

        return $model;
    }
}
