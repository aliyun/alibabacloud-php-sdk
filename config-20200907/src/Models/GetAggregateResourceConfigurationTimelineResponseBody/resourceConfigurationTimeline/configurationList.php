<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceConfigurationTimelineResponseBody\resourceConfigurationTimeline;

use AlibabaCloud\Dara\Model;

class configurationList extends Model
{
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var string
     */
    public $availabilityZone;
    /**
     * @var string
     */
    public $captureTime;
    /**
     * @var string
     */
    public $configurationDiff;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $resourceCreateTime;
    /**
     * @var string
     */
    public $resourceEventType;
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
    public $resourceType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
