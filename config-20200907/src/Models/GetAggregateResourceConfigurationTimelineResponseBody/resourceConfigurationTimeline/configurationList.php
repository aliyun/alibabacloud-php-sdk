<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceConfigurationTimelineResponseBody\resourceConfigurationTimeline;

use AlibabaCloud\Tea\Model;

class configurationList extends Model
{
    /**
     * @description The timestamp when the resource change snapshot was recorded. Unit: milliseconds.
     *
     * @example 100931896542****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The ID of the resource.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $availabilityZone;

    /**
     * @example 1624961156000
     *
     * @var string
     */
    public $captureTime;

    /**
     * @example {\"AccessControlList\":[null,{\"Grant\":\"private\"}],\"ServerSideEncryptionRule\":[null,{\"SSEAlgorithm\":\"None\"}],\"CreationDate\":[null,\"2021-06-29T10:05:12.000Z\"],\"Owner\":[null,{\"DisplayName\":\"100931896542****\",\"ID\":\"100931896542****\"}],\"BucketPolicy\":[null,{\"LogPrefix\":\"\",\"LogBucket\":\"\"}],\"StorageClass\":[null,\"Standard\"],\"ExtranetEndpoint\":[null,\"oss-cn-hangzhou.aliyuncs.com\"],\"DataRedundancyType\":[null,\"LRS\"],\"AllowEmptyReferer\":[null,\"true\"],\"IntranetEndpoint\":[null,\"oss-cn-hangzhou-internal.aliyuncs.com\"],\"Name\":[null,\"new-bucket\"],\"Location\":[null,\"oss-cn-hangzhou\"]}
     *
     * @var string
     */
    public $configurationDiff;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example 1624961112000
     *
     * @var string
     */
    public $resourceCreateTime;

    /**
     * @description The details of the resource change that triggered the compliance evaluation.
     *
     * @example DISCOVERED
     *
     * @var string
     */
    public $resourceEventType;

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
     * @description The name of the resource.
     *
     * @example ACS::OSS::Bucket
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the region in which the resource resides.
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
        'configurationDiff'  => 'ConfigurationDiff',
        'region'             => 'Region',
        'resourceCreateTime' => 'ResourceCreateTime',
        'resourceEventType'  => 'ResourceEventType',
        'resourceId'         => 'ResourceId',
        'resourceName'       => 'ResourceName',
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
        if (null !== $this->configurationDiff) {
            $res['ConfigurationDiff'] = $this->configurationDiff;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceCreateTime) {
            $res['ResourceCreateTime'] = $this->resourceCreateTime;
        }
        if (null !== $this->resourceEventType) {
            $res['ResourceEventType'] = $this->resourceEventType;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
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
     * @return configurationList
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
        if (isset($map['ConfigurationDiff'])) {
            $model->configurationDiff = $map['ConfigurationDiff'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceCreateTime'])) {
            $model->resourceCreateTime = $map['ResourceCreateTime'];
        }
        if (isset($map['ResourceEventType'])) {
            $model->resourceEventType = $map['ResourceEventType'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
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
