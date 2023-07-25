<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListDiscoveredResourcesResponseBody\discoveredResourceProfiles;

use AlibabaCloud\Tea\Model;

class discoveredResourceProfileList extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example 161259599160****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The zone.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $availabilityZone;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The timestamp when the resource was created. Unit: milliseconds.
     *
     * @example 1618675206000
     *
     * @var int
     */
    public $resourceCreationTime;

    /**
     * @description The status of the resource. Valid values:
     *
     *   0: The resource is deleted.
     *   1: The resource is retained.
     *
     * @example 1
     *
     * @var int
     */
    public $resourceDeleted;

    /**
     * @description The resource ID.
     *
     * @example eni-hp31cqoba96jagtz****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The name of the resource.
     *
     * @example Cloud Firewall
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The status of the resource. The value of this parameter varies based on the resource type and may be empty. Examples:
     *
     *   If the value of the ResourceType parameter is ACS::ECS::Instance, the resource is an Elastic Compute Service (ECS) instance that is in a specific state. In this case, the valid values of this parameter are Running and Stopped.
     *   If the value of the ResourceType parameter is ACS::OSS::Bucket, the resource is an Object Storage Service (OSS) bucket that is not in a specific state. In this case, this parameter is empty.
     *
     * @example InUse
     *
     * @var string
     */
    public $resourceStatus;

    /**
     * @description The type of the resource.
     *
     * @example ACS::ECS::NetworkInterface
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tags of the resource.
     *
     * @example {\"key1\":[\"value2\"]}
     *
     * @var string
     */
    public $tags;

    /**
     * @description The version of the resource change.
     *
     * @example 1
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'accountId'            => 'AccountId',
        'availabilityZone'     => 'AvailabilityZone',
        'region'               => 'Region',
        'resourceCreationTime' => 'ResourceCreationTime',
        'resourceDeleted'      => 'ResourceDeleted',
        'resourceId'           => 'ResourceId',
        'resourceName'         => 'ResourceName',
        'resourceStatus'       => 'ResourceStatus',
        'resourceType'         => 'ResourceType',
        'tags'                 => 'Tags',
        'version'              => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->availabilityZone) {
            $res['AvailabilityZone'] = $this->availabilityZone;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceCreationTime) {
            $res['ResourceCreationTime'] = $this->resourceCreationTime;
        }
        if (null !== $this->resourceDeleted) {
            $res['ResourceDeleted'] = $this->resourceDeleted;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return discoveredResourceProfileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AvailabilityZone'])) {
            $model->availabilityZone = $map['AvailabilityZone'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceCreationTime'])) {
            $model->resourceCreationTime = $map['ResourceCreationTime'];
        }
        if (isset($map['ResourceDeleted'])) {
            $model->resourceDeleted = $map['ResourceDeleted'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
