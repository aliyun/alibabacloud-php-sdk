<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateEnterpriseSnapshotPolicyShrinkRequest\tag;

class CreateEnterpriseSnapshotPolicyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $crossRegionCopyInfoShrink;
    /**
     * @var string
     */
    public $desc;
    /**
     * @var string
     */
    public $name;
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
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
