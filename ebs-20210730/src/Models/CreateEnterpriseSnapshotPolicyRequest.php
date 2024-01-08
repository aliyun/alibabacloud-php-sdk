<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateEnterpriseSnapshotPolicyRequest\crossRegionCopyInfo;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateEnterpriseSnapshotPolicyRequest\retainRule;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateEnterpriseSnapshotPolicyRequest\schedule;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateEnterpriseSnapshotPolicyRequest\specialRetainRules;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateEnterpriseSnapshotPolicyRequest\storageRule;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateEnterpriseSnapshotPolicyRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateEnterpriseSnapshotPolicyRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotency of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Snapshot replication destination information.
     *
     * @var crossRegionCopyInfo
     */
    public $crossRegionCopyInfo;

    /**
     * @description The description of the policy.
     *
     * @example xxx
     *
     * @var string
     */
    public $desc;

    /**
     * @description The name of the policy.
     *
     * @example xx
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID . You can call the [DescribeRegions](~~354276~~) operation to query the most recent list of regions in which snapshot policy is supported.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which to assign the snapshot policy.
     *
     * @example xxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The snapshot retention rule.
     *
     * @var retainRule
     */
    public $retainRule;

    /**
     * @description The rule for scheduling.
     *
     * @var schedule
     */
    public $schedule;

    /**
     * @description The special snapshot retention rules.
     *
     * @var specialRetainRules
     */
    public $specialRetainRules;

    /**
     * @description The status of the policy. Valid values:
     *
     * - DISABLED: Disable snapshot policy execution.
     * @example ENABLED
     *
     * @var string
     */
    public $state;

    /**
     * @description Advanced snapshot features.
     *
     * @var storageRule
     */
    public $storageRule;

    /**
     * @description The list of tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Binding target type, valid value:
     *
     * - DISK
     * @example DISK
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'clientToken'         => 'ClientToken',
        'crossRegionCopyInfo' => 'CrossRegionCopyInfo',
        'desc'                => 'Desc',
        'name'                => 'Name',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'retainRule'          => 'RetainRule',
        'schedule'            => 'Schedule',
        'specialRetainRules'  => 'SpecialRetainRules',
        'state'               => 'State',
        'storageRule'         => 'StorageRule',
        'tag'                 => 'Tag',
        'targetType'          => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->crossRegionCopyInfo) {
            $res['CrossRegionCopyInfo'] = null !== $this->crossRegionCopyInfo ? $this->crossRegionCopyInfo->toMap() : null;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->retainRule) {
            $res['RetainRule'] = null !== $this->retainRule ? $this->retainRule->toMap() : null;
        }
        if (null !== $this->schedule) {
            $res['Schedule'] = null !== $this->schedule ? $this->schedule->toMap() : null;
        }
        if (null !== $this->specialRetainRules) {
            $res['SpecialRetainRules'] = null !== $this->specialRetainRules ? $this->specialRetainRules->toMap() : null;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->storageRule) {
            $res['StorageRule'] = null !== $this->storageRule ? $this->storageRule->toMap() : null;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEnterpriseSnapshotPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CrossRegionCopyInfo'])) {
            $model->crossRegionCopyInfo = crossRegionCopyInfo::fromMap($map['CrossRegionCopyInfo']);
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RetainRule'])) {
            $model->retainRule = retainRule::fromMap($map['RetainRule']);
        }
        if (isset($map['Schedule'])) {
            $model->schedule = schedule::fromMap($map['Schedule']);
        }
        if (isset($map['SpecialRetainRules'])) {
            $model->specialRetainRules = specialRetainRules::fromMap($map['SpecialRetainRules']);
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['StorageRule'])) {
            $model->storageRule = storageRule::fromMap($map['StorageRule']);
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
