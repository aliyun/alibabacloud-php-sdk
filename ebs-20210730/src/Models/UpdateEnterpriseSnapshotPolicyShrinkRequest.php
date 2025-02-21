<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;

class UpdateEnterpriseSnapshotPolicyShrinkRequest extends Model
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
    public $policyId;
    /**
     * @var string
     */
    public $regionId;
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
    protected $_name = [
        'clientToken'               => 'ClientToken',
        'crossRegionCopyInfoShrink' => 'CrossRegionCopyInfo',
        'desc'                      => 'Desc',
        'name'                      => 'Name',
        'policyId'                  => 'PolicyId',
        'regionId'                  => 'RegionId',
        'retainRuleShrink'          => 'RetainRule',
        'scheduleShrink'            => 'Schedule',
        'specialRetainRulesShrink'  => 'SpecialRetainRules',
        'state'                     => 'State',
        'storageRuleShrink'         => 'StorageRule',
    ];

    public function validate()
    {
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

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        return $model;
    }
}
