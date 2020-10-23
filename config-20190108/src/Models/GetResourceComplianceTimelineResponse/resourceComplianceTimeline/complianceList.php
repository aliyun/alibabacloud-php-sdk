<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\GetResourceComplianceTimelineResponse\resourceComplianceTimeline;

use AlibabaCloud\Tea\Model;

class complianceList extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $availabilityZone;

    /**
     * @var int
     */
    public $captureTime;

    /**
     * @var string
     */
    public $configuration;

    /**
     * @var string
     */
    public $configurationDiff;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $resourceCreateTime;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceStatus;

    /**
     * @var string
     */
    public $resourceType;

    /**
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
        Model::validateRequired('accountId', $this->accountId, true);
        Model::validateRequired('availabilityZone', $this->availabilityZone, true);
        Model::validateRequired('captureTime', $this->captureTime, true);
        Model::validateRequired('configuration', $this->configuration, true);
        Model::validateRequired('configurationDiff', $this->configurationDiff, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('resourceCreateTime', $this->resourceCreateTime, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('resourceName', $this->resourceName, true);
        Model::validateRequired('resourceStatus', $this->resourceStatus, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('tags', $this->tags, true);
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
