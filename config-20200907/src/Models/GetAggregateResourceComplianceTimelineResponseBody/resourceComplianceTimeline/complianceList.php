<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceTimelineResponseBody\resourceComplianceTimeline;

use AlibabaCloud\Tea\Model;

class complianceList extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example 100931896542****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The ID of the zone in which the resource resides.
     *
     * @example cn-hangzhou-f
     *
     * @var string
     */
    public $availabilityZone;

    /**
     * @description The timestamp when the compliance evaluation was recorded. Unit: milliseconds.
     *
     * @example 1625200295276
     *
     * @var int
     */
    public $captureTime;

    /**
     * @description The information about the rules that evaluated the resource and the compliance evaluation result.
     *
     * @example {
     * "Owner": {
     * "DisplayName": "126672004088****",
     * "ID": "126672004088****"
     * },
     * "ResourceGroupId": "rg-acfmy4dfoau****",
     * "AllowEmptyReferer": "true",
     * "Name": "test-private-oss****",
     * }
     * @var string
     */
    public $configuration;

    /**
     * @description The details of the resource change that triggered the compliance evaluation.
     *
     * @example {
     * "ResourceGroupId": [
     * "rg-acfmy4dfoau****",
     * "rg-a3dmy4lksta****"
     * }
     * @var string
     */
    public $configurationDiff;

    /**
     * @description The ID of the region in which the resource resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The timestamp when the resource was created. Unit: milliseconds.
     *
     * @example 1624961112000
     *
     * @var int
     */
    public $resourceCreateTime;

    /**
     * @description The ID of the resource.
     *
     * @example test-private-oss****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The name of the resource.
     *
     * @example test-private-oss****
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The status of the resource. The parameter value varies based on the resource type and may be left empty. Examples:
     *
     *   If the ResourceType parameter is set to ACS::ECS::Instance, the resource is an Elastic Compute Service (ECS) instance that has a specific state. In this case, the valid values of this parameter are Running and Stopped.
     *   If the ResourceType parameter is set to ACS::OSS::Bucket, the resource is an OSS bucket that does not have a specific state. In this case, this parameter is left empty.
     *
     * @example Running
     *
     * @var string
     */
    public $resourceStatus;

    /**
     * @description The type of the resource.
     *
     * @example ACS::OSS::Bucket
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tags of the resource.
     *
     * @example {\"\"hc\"\":[\"\"value2\"\"]}
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'accountId'          => 'AccountId',
        'availabilityZone'   => 'AvailabilityZone',
        'captureTime'        => 'CaptureTime',
        'configuration'      => 'Configuration',
        'configurationDiff'  => 'ConfigurationDiff',
        'region'             => 'Region',
        'resourceCreateTime' => 'ResourceCreateTime',
        'resourceId'         => 'ResourceId',
        'resourceName'       => 'ResourceName',
        'resourceStatus'     => 'ResourceStatus',
        'resourceType'       => 'ResourceType',
        'tags'               => 'Tags',
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
        if (null !== $this->captureTime) {
            $res['CaptureTime'] = $this->captureTime;
        }
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->configurationDiff) {
            $res['ConfigurationDiff'] = $this->configurationDiff;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceCreateTime) {
            $res['ResourceCreateTime'] = $this->resourceCreateTime;
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
     * @return complianceList
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
        if (isset($map['CaptureTime'])) {
            $model->captureTime = $map['CaptureTime'];
        }
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['ConfigurationDiff'])) {
            $model->configurationDiff = $map['ConfigurationDiff'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceCreateTime'])) {
            $model->resourceCreateTime = $map['ResourceCreateTime'];
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
