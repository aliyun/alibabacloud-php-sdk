<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeDiscoveredResourceResponse;

use AlibabaCloud\Tea\Model;

class discoveredResourceDetail extends Model
{
    /**
     * @var int
     */
    public $accountId;

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
    public $resourceName;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $availabilityZone;

    /**
     * @var int
     */
    public $resourceCreationTime;

    /**
     * @var string
     */
    public $resourceStatus;

    /**
     * @var int
     */
    public $resourceDeleted;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $configuration;
    protected $_name = [
        'accountId'            => 'AccountId',
        'resourceId'           => 'ResourceId',
        'resourceType'         => 'ResourceType',
        'resourceName'         => 'ResourceName',
        'region'               => 'Region',
        'availabilityZone'     => 'AvailabilityZone',
        'resourceCreationTime' => 'ResourceCreationTime',
        'resourceStatus'       => 'ResourceStatus',
        'resourceDeleted'      => 'ResourceDeleted',
        'tags'                 => 'Tags',
        'configuration'        => 'Configuration',
    ];

    public function validate()
    {
        Model::validateRequired('accountId', $this->accountId, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('resourceName', $this->resourceName, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('availabilityZone', $this->availabilityZone, true);
        Model::validateRequired('resourceCreationTime', $this->resourceCreationTime, true);
        Model::validateRequired('resourceStatus', $this->resourceStatus, true);
        Model::validateRequired('resourceDeleted', $this->resourceDeleted, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('configuration', $this->configuration, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->availabilityZone) {
            $res['AvailabilityZone'] = $this->availabilityZone;
        }
        if (null !== $this->resourceCreationTime) {
            $res['ResourceCreationTime'] = $this->resourceCreationTime;
        }
        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
        }
        if (null !== $this->resourceDeleted) {
            $res['ResourceDeleted'] = $this->resourceDeleted;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
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
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['AvailabilityZone'])) {
            $model->availabilityZone = $map['AvailabilityZone'];
        }
        if (isset($map['ResourceCreationTime'])) {
            $model->resourceCreationTime = $map['ResourceCreationTime'];
        }
        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }
        if (isset($map['ResourceDeleted'])) {
            $model->resourceDeleted = $map['ResourceDeleted'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }

        return $model;
    }
}
