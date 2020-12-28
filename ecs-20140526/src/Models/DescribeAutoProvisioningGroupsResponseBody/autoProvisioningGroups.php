<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\launchTemplateConfigs;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\payAsYouGoOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\spotOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\targetCapacitySpecification;
use AlibabaCloud\Tea\Model;

class autoProvisioningGroups extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $autoProvisioningGroupName;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var float
     */
    public $maxSpotPrice;

    /**
     * @var bool
     */
    public $terminateInstances;

    /**
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $validFrom;

    /**
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @var string
     */
    public $validUntil;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $terminateInstancesWithExpiration;

    /**
     * @var string
     */
    public $autoProvisioningGroupType;

    /**
     * @var string
     */
    public $autoProvisioningGroupId;

    /**
     * @var payAsYouGoOptions
     */
    public $payAsYouGoOptions;

    /**
     * @var targetCapacitySpecification
     */
    public $targetCapacitySpecification;

    /**
     * @var spotOptions
     */
    public $spotOptions;

    /**
     * @var launchTemplateConfigs[]
     */
    public $launchTemplateConfigs;

    /**
     * @var string
     */
    public $excessCapacityTerminationPolicy;
    protected $_name = [
        'status'                           => 'Status',
        'autoProvisioningGroupName'        => 'AutoProvisioningGroupName',
        'creationTime'                     => 'CreationTime',
        'maxSpotPrice'                     => 'MaxSpotPrice',
        'terminateInstances'               => 'TerminateInstances',
        'launchTemplateId'                 => 'LaunchTemplateId',
        'state'                            => 'State',
        'validFrom'                        => 'ValidFrom',
        'launchTemplateVersion'            => 'LaunchTemplateVersion',
        'validUntil'                       => 'ValidUntil',
        'regionId'                         => 'RegionId',
        'terminateInstancesWithExpiration' => 'TerminateInstancesWithExpiration',
        'autoProvisioningGroupType'        => 'AutoProvisioningGroupType',
        'autoProvisioningGroupId'          => 'AutoProvisioningGroupId',
        'payAsYouGoOptions'                => 'PayAsYouGoOptions',
        'targetCapacitySpecification'      => 'TargetCapacitySpecification',
        'spotOptions'                      => 'SpotOptions',
        'launchTemplateConfigs'            => 'LaunchTemplateConfigs',
        'excessCapacityTerminationPolicy'  => 'ExcessCapacityTerminationPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->autoProvisioningGroupName) {
            $res['AutoProvisioningGroupName'] = $this->autoProvisioningGroupName;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->maxSpotPrice) {
            $res['MaxSpotPrice'] = $this->maxSpotPrice;
        }
        if (null !== $this->terminateInstances) {
            $res['TerminateInstances'] = $this->terminateInstances;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->validFrom) {
            $res['ValidFrom'] = $this->validFrom;
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }
        if (null !== $this->validUntil) {
            $res['ValidUntil'] = $this->validUntil;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->terminateInstancesWithExpiration) {
            $res['TerminateInstancesWithExpiration'] = $this->terminateInstancesWithExpiration;
        }
        if (null !== $this->autoProvisioningGroupType) {
            $res['AutoProvisioningGroupType'] = $this->autoProvisioningGroupType;
        }
        if (null !== $this->autoProvisioningGroupId) {
            $res['AutoProvisioningGroupId'] = $this->autoProvisioningGroupId;
        }
        if (null !== $this->payAsYouGoOptions) {
            $res['PayAsYouGoOptions'] = null !== $this->payAsYouGoOptions ? $this->payAsYouGoOptions->toMap() : null;
        }
        if (null !== $this->targetCapacitySpecification) {
            $res['TargetCapacitySpecification'] = null !== $this->targetCapacitySpecification ? $this->targetCapacitySpecification->toMap() : null;
        }
        if (null !== $this->spotOptions) {
            $res['SpotOptions'] = null !== $this->spotOptions ? $this->spotOptions->toMap() : null;
        }
        if (null !== $this->launchTemplateConfigs) {
            $res['LaunchTemplateConfigs'] = [];
            if (null !== $this->launchTemplateConfigs && \is_array($this->launchTemplateConfigs)) {
                $n = 0;
                foreach ($this->launchTemplateConfigs as $item) {
                    $res['LaunchTemplateConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->excessCapacityTerminationPolicy) {
            $res['ExcessCapacityTerminationPolicy'] = $this->excessCapacityTerminationPolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoProvisioningGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['AutoProvisioningGroupName'])) {
            $model->autoProvisioningGroupName = $map['AutoProvisioningGroupName'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['MaxSpotPrice'])) {
            $model->maxSpotPrice = $map['MaxSpotPrice'];
        }
        if (isset($map['TerminateInstances'])) {
            $model->terminateInstances = $map['TerminateInstances'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ValidFrom'])) {
            $model->validFrom = $map['ValidFrom'];
        }
        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }
        if (isset($map['ValidUntil'])) {
            $model->validUntil = $map['ValidUntil'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TerminateInstancesWithExpiration'])) {
            $model->terminateInstancesWithExpiration = $map['TerminateInstancesWithExpiration'];
        }
        if (isset($map['AutoProvisioningGroupType'])) {
            $model->autoProvisioningGroupType = $map['AutoProvisioningGroupType'];
        }
        if (isset($map['AutoProvisioningGroupId'])) {
            $model->autoProvisioningGroupId = $map['AutoProvisioningGroupId'];
        }
        if (isset($map['PayAsYouGoOptions'])) {
            $model->payAsYouGoOptions = payAsYouGoOptions::fromMap($map['PayAsYouGoOptions']);
        }
        if (isset($map['TargetCapacitySpecification'])) {
            $model->targetCapacitySpecification = targetCapacitySpecification::fromMap($map['TargetCapacitySpecification']);
        }
        if (isset($map['SpotOptions'])) {
            $model->spotOptions = spotOptions::fromMap($map['SpotOptions']);
        }
        if (isset($map['LaunchTemplateConfigs'])) {
            if (!empty($map['LaunchTemplateConfigs'])) {
                $model->launchTemplateConfigs = [];
                $n                            = 0;
                foreach ($map['LaunchTemplateConfigs'] as $item) {
                    $model->launchTemplateConfigs[$n++] = null !== $item ? launchTemplateConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExcessCapacityTerminationPolicy'])) {
            $model->excessCapacityTerminationPolicy = $map['ExcessCapacityTerminationPolicy'];
        }

        return $model;
    }
}
