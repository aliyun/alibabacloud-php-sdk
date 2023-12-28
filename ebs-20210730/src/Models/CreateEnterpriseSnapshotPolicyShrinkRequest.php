<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateEnterpriseSnapshotPolicyShrinkRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateEnterpriseSnapshotPolicyShrinkRequest extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $crossRegionCopyInfoShrink;

    /**
     * @example xxx
     *
     * @var string
     */
    public $desc;

    /**
     * @example xx
     *
     * @var string
     */
    public $name;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $retainRuleShrink;

    /**
     * @var string
     */
    public $scheduleShrink;

    /**
     * @var string
     */
    public $specialRetainRulesShrink;

    /**
     * @example ENABLED|DISABLED
     *
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $storageRuleShrink;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @example DISK
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'clientToken'               => 'ClientToken',
        'crossRegionCopyInfoShrink' => 'CrossRegionCopyInfo',
        'desc'                      => 'Desc',
        'name'                      => 'Name',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'retainRuleShrink'          => 'RetainRule',
        'scheduleShrink'            => 'Schedule',
        'specialRetainRulesShrink'  => 'SpecialRetainRules',
        'state'                     => 'State',
        'storageRuleShrink'         => 'StorageRule',
        'tag'                       => 'Tag',
        'targetType'                => 'TargetType',
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
        if (null !== $this->crossRegionCopyInfoShrink) {
            $res['CrossRegionCopyInfo'] = $this->crossRegionCopyInfoShrink;
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
        if (null !== $this->retainRuleShrink) {
            $res['RetainRule'] = $this->retainRuleShrink;
        }
        if (null !== $this->scheduleShrink) {
            $res['Schedule'] = $this->scheduleShrink;
        }
        if (null !== $this->specialRetainRulesShrink) {
            $res['SpecialRetainRules'] = $this->specialRetainRulesShrink;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->storageRuleShrink) {
            $res['StorageRule'] = $this->storageRuleShrink;
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
     * @return CreateEnterpriseSnapshotPolicyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CrossRegionCopyInfo'])) {
            $model->crossRegionCopyInfoShrink = $map['CrossRegionCopyInfo'];
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
            $model->retainRuleShrink = $map['RetainRule'];
        }
        if (isset($map['Schedule'])) {
            $model->scheduleShrink = $map['Schedule'];
        }
        if (isset($map['SpecialRetainRules'])) {
            $model->specialRetainRulesShrink = $map['SpecialRetainRules'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['StorageRule'])) {
            $model->storageRuleShrink = $map['StorageRule'];
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
