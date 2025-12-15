<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\LookupResourceGroupEventsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\LookupResourceGroupEventsResponseBody\events\sourceResourceGroupInfo;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\LookupResourceGroupEventsResponseBody\events\targetResourceGroupInfo;

class events extends Model
{
    /**
     * @var string
     */
    public $changeType;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupDisplayName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $service;

    /**
     * @var sourceResourceGroupInfo
     */
    public $sourceResourceGroupInfo;

    /**
     * @var targetResourceGroupInfo
     */
    public $targetResourceGroupInfo;
    protected $_name = [
        'changeType' => 'ChangeType',
        'eventTime' => 'EventTime',
        'regionId' => 'RegionId',
        'resourceGroupDisplayName' => 'ResourceGroupDisplayName',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'service' => 'Service',
        'sourceResourceGroupInfo' => 'SourceResourceGroupInfo',
        'targetResourceGroupInfo' => 'TargetResourceGroupInfo',
    ];

    public function validate()
    {
        if (null !== $this->sourceResourceGroupInfo) {
            $this->sourceResourceGroupInfo->validate();
        }
        if (null !== $this->targetResourceGroupInfo) {
            $this->targetResourceGroupInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }

        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupDisplayName) {
            $res['ResourceGroupDisplayName'] = $this->resourceGroupDisplayName;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        if (null !== $this->sourceResourceGroupInfo) {
            $res['SourceResourceGroupInfo'] = null !== $this->sourceResourceGroupInfo ? $this->sourceResourceGroupInfo->toArray($noStream) : $this->sourceResourceGroupInfo;
        }

        if (null !== $this->targetResourceGroupInfo) {
            $res['TargetResourceGroupInfo'] = null !== $this->targetResourceGroupInfo ? $this->targetResourceGroupInfo->toArray($noStream) : $this->targetResourceGroupInfo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }

        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupDisplayName'])) {
            $model->resourceGroupDisplayName = $map['ResourceGroupDisplayName'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        if (isset($map['SourceResourceGroupInfo'])) {
            $model->sourceResourceGroupInfo = sourceResourceGroupInfo::fromMap($map['SourceResourceGroupInfo']);
        }

        if (isset($map['TargetResourceGroupInfo'])) {
            $model->targetResourceGroupInfo = targetResourceGroupInfo::fromMap($map['TargetResourceGroupInfo']);
        }

        return $model;
    }
}
