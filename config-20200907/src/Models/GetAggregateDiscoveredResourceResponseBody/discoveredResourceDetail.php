<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateDiscoveredResourceResponseBody;

use AlibabaCloud\Tea\Model;

class discoveredResourceDetail extends Model
{
    /**
     * @description The status of the resource. The parameter value varies based on the resource type and may be left empty. Examples:
     *
     *   If the value of the ResourceType parameter is ACS::ECS::Instance, the resource is an Elastic Compute Service (ECS) instance that has a specific state. In this case, the valid values of this parameter are Running and Stopped.
     *   If the value of the ResourceType parameter is ACS::OSS::Bucket, the resource is an Object Storage Service (OSS) bucket that does not have a specific state. In this case, this parameter is left empty.
     *
     * @example 100931896542****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The timestamp when the resource was created.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $availabilityZone;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example {\"AccessControlList\":{\"Grant\":\"private\"},\"ServerSideEncryptionRule\":{\"SSEAlgorithm\":\"None\"},\"Comment\":\"\",\"CreationDate\":\"2021-06-29T10:05:12.000Z\",\"Owner\":{\"DisplayName\":\"100931896542****\",\"ID\":\"100931896542****\"},\"StorageClass\":\"Standard\",\"DataRedundancyType\":\"LRS\",\"AllowEmptyReferer\":\"true\",\"Name\":\"new-bucket\",\"BucketPolicy\":{\"LogPrefix\":\"\",\"LogBucket\":\"\"},\"ExtranetEndpoint\":\"oss-cn-hangzhou.aliyuncs.com\",\"IntranetEndpoint\":\"oss-cn-hangzhou-internal.aliyuncs.com\",\"Location\":\"oss-cn-hangzhou\"}
     *
     * @var string
     */
    public $configuration;

    /**
     * @description The ID of the resource.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description Indicates whether the resource is deleted. Valid values:
     *
     *   1: The resource is retained.
     *   0: The resource is deleted.
     *
     * @example 1624961112000
     *
     * @var int
     */
    public $resourceCreationTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $resourceDeleted;

    /**
     * @example new-bucket
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example new-bucket
     *
     * @var string
     */
    public $resourceName;

    /**
     * @example offline
     *
     * @var string
     */
    public $resourceStatus;

    /**
     * @description The tags of the resource.
     *
     * @example ACS::OSS::BucketACS::CDN::Domain
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The name of the resource.
     *
     * @example {\"\"hc\"\":[\"\"value2\"\"]}
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'accountId'            => 'AccountId',
        'availabilityZone'     => 'AvailabilityZone',
        'configuration'        => 'Configuration',
        'region'               => 'Region',
        'resourceCreationTime' => 'ResourceCreationTime',
        'resourceDeleted'      => 'ResourceDeleted',
        'resourceId'           => 'ResourceId',
        'resourceName'         => 'ResourceName',
        'resourceStatus'       => 'ResourceStatus',
        'resourceType'         => 'ResourceType',
        'tags'                 => 'Tags',
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
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return discoveredResourceDetail
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
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
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

        return $model;
    }
}
