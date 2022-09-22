<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePrivatePoolsResponseBody\privatePoolSet;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePrivatePoolsResponseBody\privatePoolSet\privatePoolItem\allocatedResources;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePrivatePoolsResponseBody\privatePoolSet\privatePoolItem\tags;
use AlibabaCloud\Tea\Model;

class privatePoolItem extends Model
{
    /**
     * @var allocatedResources
     */
    public $allocatedResources;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $endTimeType;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $latestStartTime;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $privatePoolOptionsId;

    /**
     * @var string
     */
    public $privatePoolOptionsMatchCriteria;

    /**
     * @var string
     */
    public $privatePoolOptionsName;

    /**
     * @var string
     */
    public $privatePoolOptionsType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $startTimeType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $totalAssuranceTimes;

    /**
     * @var int
     */
    public $usedAssuranceTimes;
    protected $_name = [
        'allocatedResources'              => 'AllocatedResources',
        'description'                     => 'Description',
        'endTime'                         => 'EndTime',
        'endTimeType'                     => 'EndTimeType',
        'instanceChargeType'              => 'InstanceChargeType',
        'latestStartTime'                 => 'LatestStartTime',
        'platform'                        => 'Platform',
        'privatePoolOptionsId'            => 'PrivatePoolOptionsId',
        'privatePoolOptionsMatchCriteria' => 'PrivatePoolOptionsMatchCriteria',
        'privatePoolOptionsName'          => 'PrivatePoolOptionsName',
        'privatePoolOptionsType'          => 'PrivatePoolOptionsType',
        'regionId'                        => 'RegionId',
        'resourceGroupId'                 => 'ResourceGroupId',
        'startTime'                       => 'StartTime',
        'startTimeType'                   => 'StartTimeType',
        'status'                          => 'Status',
        'tags'                            => 'Tags',
        'totalAssuranceTimes'             => 'TotalAssuranceTimes',
        'usedAssuranceTimes'              => 'UsedAssuranceTimes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocatedResources) {
            $res['AllocatedResources'] = null !== $this->allocatedResources ? $this->allocatedResources->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endTimeType) {
            $res['EndTimeType'] = $this->endTimeType;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->latestStartTime) {
            $res['LatestStartTime'] = $this->latestStartTime;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->privatePoolOptionsId) {
            $res['PrivatePoolOptionsId'] = $this->privatePoolOptionsId;
        }
        if (null !== $this->privatePoolOptionsMatchCriteria) {
            $res['PrivatePoolOptionsMatchCriteria'] = $this->privatePoolOptionsMatchCriteria;
        }
        if (null !== $this->privatePoolOptionsName) {
            $res['PrivatePoolOptionsName'] = $this->privatePoolOptionsName;
        }
        if (null !== $this->privatePoolOptionsType) {
            $res['PrivatePoolOptionsType'] = $this->privatePoolOptionsType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->startTimeType) {
            $res['StartTimeType'] = $this->startTimeType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->totalAssuranceTimes) {
            $res['TotalAssuranceTimes'] = $this->totalAssuranceTimes;
        }
        if (null !== $this->usedAssuranceTimes) {
            $res['UsedAssuranceTimes'] = $this->usedAssuranceTimes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privatePoolItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocatedResources'])) {
            $model->allocatedResources = allocatedResources::fromMap($map['AllocatedResources']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EndTimeType'])) {
            $model->endTimeType = $map['EndTimeType'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['LatestStartTime'])) {
            $model->latestStartTime = $map['LatestStartTime'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['PrivatePoolOptionsId'])) {
            $model->privatePoolOptionsId = $map['PrivatePoolOptionsId'];
        }
        if (isset($map['PrivatePoolOptionsMatchCriteria'])) {
            $model->privatePoolOptionsMatchCriteria = $map['PrivatePoolOptionsMatchCriteria'];
        }
        if (isset($map['PrivatePoolOptionsName'])) {
            $model->privatePoolOptionsName = $map['PrivatePoolOptionsName'];
        }
        if (isset($map['PrivatePoolOptionsType'])) {
            $model->privatePoolOptionsType = $map['PrivatePoolOptionsType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StartTimeType'])) {
            $model->startTimeType = $map['StartTimeType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TotalAssuranceTimes'])) {
            $model->totalAssuranceTimes = $map['TotalAssuranceTimes'];
        }
        if (isset($map['UsedAssuranceTimes'])) {
            $model->usedAssuranceTimes = $map['UsedAssuranceTimes'];
        }

        return $model;
    }
}
