<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAutoGroupingRemediationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAutoGroupingRemediationsResponseBody\remediations\targetResourceGroupInfo;

class remediations extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remediationId;

    /**
     * @var string
     */
    public $remediationTime;

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
     * @var targetResourceGroupInfo
     */
    public $targetResourceGroupInfo;
    protected $_name = [
        'regionId' => 'RegionId',
        'remediationId' => 'RemediationId',
        'remediationTime' => 'RemediationTime',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'service' => 'Service',
        'targetResourceGroupInfo' => 'TargetResourceGroupInfo',
    ];

    public function validate()
    {
        if (null !== $this->targetResourceGroupInfo) {
            $this->targetResourceGroupInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->remediationId) {
            $res['RemediationId'] = $this->remediationId;
        }

        if (null !== $this->remediationTime) {
            $res['RemediationTime'] = $this->remediationTime;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RemediationId'])) {
            $model->remediationId = $map['RemediationId'];
        }

        if (isset($map['RemediationTime'])) {
            $model->remediationTime = $map['RemediationTime'];
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

        if (isset($map['TargetResourceGroupInfo'])) {
            $model->targetResourceGroupInfo = targetResourceGroupInfo::fromMap($map['TargetResourceGroupInfo']);
        }

        return $model;
    }
}
