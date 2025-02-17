<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\launchTemplateConfigs;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\payAsYouGoOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\spotOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\tags;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\targetCapacitySpecification;

class autoProvisioningGroup extends Model
{
    /**
     * @var string
     */
    public $autoProvisioningGroupId;
    /**
     * @var string
     */
    public $autoProvisioningGroupName;
    /**
     * @var string
     */
    public $autoProvisioningGroupType;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $excessCapacityTerminationPolicy;
    /**
     * @var launchTemplateConfigs
     */
    public $launchTemplateConfigs;
    /**
     * @var string
     */
    public $launchTemplateId;
    /**
     * @var string
     */
    public $launchTemplateVersion;
    /**
     * @var float
     */
    public $maxSpotPrice;
    /**
     * @var payAsYouGoOptions
     */
    public $payAsYouGoOptions;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var spotOptions
     */
    public $spotOptions;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tags
     */
    public $tags;
    /**
     * @var targetCapacitySpecification
     */
    public $targetCapacitySpecification;
    /**
     * @var bool
     */
    public $terminateInstances;
    /**
     * @var bool
     */
    public $terminateInstancesWithExpiration;
    /**
     * @var string
     */
    public $validFrom;
    /**
     * @var string
     */
    public $validUntil;
    protected $_name = [
        'autoProvisioningGroupId'          => 'AutoProvisioningGroupId',
        'autoProvisioningGroupName'        => 'AutoProvisioningGroupName',
        'autoProvisioningGroupType'        => 'AutoProvisioningGroupType',
        'creationTime'                     => 'CreationTime',
        'excessCapacityTerminationPolicy'  => 'ExcessCapacityTerminationPolicy',
        'launchTemplateConfigs'            => 'LaunchTemplateConfigs',
        'launchTemplateId'                 => 'LaunchTemplateId',
        'launchTemplateVersion'            => 'LaunchTemplateVersion',
        'maxSpotPrice'                     => 'MaxSpotPrice',
        'payAsYouGoOptions'                => 'PayAsYouGoOptions',
        'regionId'                         => 'RegionId',
        'resourceGroupId'                  => 'ResourceGroupId',
        'spotOptions'                      => 'SpotOptions',
        'state'                            => 'State',
        'status'                           => 'Status',
        'tags'                             => 'Tags',
        'targetCapacitySpecification'      => 'TargetCapacitySpecification',
        'terminateInstances'               => 'TerminateInstances',
        'terminateInstancesWithExpiration' => 'TerminateInstancesWithExpiration',
        'validFrom'                        => 'ValidFrom',
        'validUntil'                       => 'ValidUntil',
    ];

    public function validate()
    {
        if (null !== $this->launchTemplateConfigs) {
            $this->launchTemplateConfigs->validate();
        }
        if (null !== $this->payAsYouGoOptions) {
            $this->payAsYouGoOptions->validate();
        }
        if (null !== $this->spotOptions) {
            $this->spotOptions->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        if (null !== $this->targetCapacitySpecification) {
            $this->targetCapacitySpecification->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoProvisioningGroupId) {
            $res['AutoProvisioningGroupId'] = $this->autoProvisioningGroupId;
        }

        if (null !== $this->autoProvisioningGroupName) {
            $res['AutoProvisioningGroupName'] = $this->autoProvisioningGroupName;
        }

        if (null !== $this->autoProvisioningGroupType) {
            $res['AutoProvisioningGroupType'] = $this->autoProvisioningGroupType;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->excessCapacityTerminationPolicy) {
            $res['ExcessCapacityTerminationPolicy'] = $this->excessCapacityTerminationPolicy;
        }

        if (null !== $this->launchTemplateConfigs) {
            $res['LaunchTemplateConfigs'] = null !== $this->launchTemplateConfigs ? $this->launchTemplateConfigs->toArray($noStream) : $this->launchTemplateConfigs;
        }

        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }

        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }

        if (null !== $this->maxSpotPrice) {
            $res['MaxSpotPrice'] = $this->maxSpotPrice;
        }

        if (null !== $this->payAsYouGoOptions) {
            $res['PayAsYouGoOptions'] = null !== $this->payAsYouGoOptions ? $this->payAsYouGoOptions->toArray($noStream) : $this->payAsYouGoOptions;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->spotOptions) {
            $res['SpotOptions'] = null !== $this->spotOptions ? $this->spotOptions->toArray($noStream) : $this->spotOptions;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->targetCapacitySpecification) {
            $res['TargetCapacitySpecification'] = null !== $this->targetCapacitySpecification ? $this->targetCapacitySpecification->toArray($noStream) : $this->targetCapacitySpecification;
        }

        if (null !== $this->terminateInstances) {
            $res['TerminateInstances'] = $this->terminateInstances;
        }

        if (null !== $this->terminateInstancesWithExpiration) {
            $res['TerminateInstancesWithExpiration'] = $this->terminateInstancesWithExpiration;
        }

        if (null !== $this->validFrom) {
            $res['ValidFrom'] = $this->validFrom;
        }

        if (null !== $this->validUntil) {
            $res['ValidUntil'] = $this->validUntil;
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
        if (isset($map['AutoProvisioningGroupId'])) {
            $model->autoProvisioningGroupId = $map['AutoProvisioningGroupId'];
        }

        if (isset($map['AutoProvisioningGroupName'])) {
            $model->autoProvisioningGroupName = $map['AutoProvisioningGroupName'];
        }

        if (isset($map['AutoProvisioningGroupType'])) {
            $model->autoProvisioningGroupType = $map['AutoProvisioningGroupType'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['ExcessCapacityTerminationPolicy'])) {
            $model->excessCapacityTerminationPolicy = $map['ExcessCapacityTerminationPolicy'];
        }

        if (isset($map['LaunchTemplateConfigs'])) {
            $model->launchTemplateConfigs = launchTemplateConfigs::fromMap($map['LaunchTemplateConfigs']);
        }

        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }

        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }

        if (isset($map['MaxSpotPrice'])) {
            $model->maxSpotPrice = $map['MaxSpotPrice'];
        }

        if (isset($map['PayAsYouGoOptions'])) {
            $model->payAsYouGoOptions = payAsYouGoOptions::fromMap($map['PayAsYouGoOptions']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SpotOptions'])) {
            $model->spotOptions = spotOptions::fromMap($map['SpotOptions']);
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['TargetCapacitySpecification'])) {
            $model->targetCapacitySpecification = targetCapacitySpecification::fromMap($map['TargetCapacitySpecification']);
        }

        if (isset($map['TerminateInstances'])) {
            $model->terminateInstances = $map['TerminateInstances'];
        }

        if (isset($map['TerminateInstancesWithExpiration'])) {
            $model->terminateInstancesWithExpiration = $map['TerminateInstancesWithExpiration'];
        }

        if (isset($map['ValidFrom'])) {
            $model->validFrom = $map['ValidFrom'];
        }

        if (isset($map['ValidUntil'])) {
            $model->validUntil = $map['ValidUntil'];
        }

        return $model;
    }
}
