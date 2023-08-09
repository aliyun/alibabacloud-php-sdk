<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem\allocatedResources;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem\tags;
use AlibabaCloud\Tea\Model;

class elasticityAssuranceItem extends Model
{
    /**
     * @description Details about the allocated resources.
     *
     * @var allocatedResources
     */
    public $allocatedResources;

    /**
     * @description The description of the elasticity assurance.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the elasticity assurance expires.
     *
     * @example 2021-12-03T16:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The billing method of the instance. The value can be only PostPaid. Only pay-as-you-go instances can be created by using elasticity assurances.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description > This parameter is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $latestStartTime;

    /**
     * @description The ID of the elasticity assurance.
     *
     * @example eap-bp1ir35kqtn8ywci****
     *
     * @var string
     */
    public $privatePoolOptionsId;

    /**
     * @description The type of the private pool associated with the elasticity assurance. Valid values:
     *
     *   Open: open private pool
     *   Target: specific private pool
     *
     * @example Target
     *
     * @var string
     */
    public $privatePoolOptionsMatchCriteria;

    /**
     * @description The name of the elasticity assurance.
     *
     * @example eapTestName
     *
     * @var string
     */
    public $privatePoolOptionsName;

    /**
     * @description The region ID of the elasticity assurance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The time when the elasticity assurance takes effect.
     *
     * @example 2020-12-03T05:25Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Indicates when the elasticity assurance takes effect. Valid values:
     *
     *   Now: The elasticity assurance takes effect immediately after it is created.
     *   Later: The elasticity assurance takes effect at a specified time.
     *
     * @example Now
     *
     * @var string
     */
    public $startTimeType;

    /**
     * @description The status of the elasticity assurance. Valid values:
     *
     *   Preparing
     *   Prepared
     *   Active
     *   Released
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the elasticity assurance.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The total number of times that the elasticity assurance is applied.
     *
     * @example Unlimited
     *
     * @var string
     */
    public $totalAssuranceTimes;

    /**
     * @description > This parameter is not publicly available.
     *
     * @example 0
     *
     * @var int
     */
    public $usedAssuranceTimes;
    protected $_name = [
        'allocatedResources'              => 'AllocatedResources',
        'description'                     => 'Description',
        'endTime'                         => 'EndTime',
        'instanceChargeType'              => 'InstanceChargeType',
        'latestStartTime'                 => 'LatestStartTime',
        'privatePoolOptionsId'            => 'PrivatePoolOptionsId',
        'privatePoolOptionsMatchCriteria' => 'PrivatePoolOptionsMatchCriteria',
        'privatePoolOptionsName'          => 'PrivatePoolOptionsName',
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
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->latestStartTime) {
            $res['LatestStartTime'] = $this->latestStartTime;
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
     * @return elasticityAssuranceItem
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
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['LatestStartTime'])) {
            $model->latestStartTime = $map['LatestStartTime'];
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
