<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ebs\V20210730\Models\UpdateEnterpriseSnapshotPolicyRequest\crossRegionCopyInfo;
use AlibabaCloud\SDK\Ebs\V20210730\Models\UpdateEnterpriseSnapshotPolicyRequest\retainRule;
use AlibabaCloud\SDK\Ebs\V20210730\Models\UpdateEnterpriseSnapshotPolicyRequest\schedule;
use AlibabaCloud\SDK\Ebs\V20210730\Models\UpdateEnterpriseSnapshotPolicyRequest\specialRetainRules;
use AlibabaCloud\SDK\Ebs\V20210730\Models\UpdateEnterpriseSnapshotPolicyRequest\storageRule;

class UpdateEnterpriseSnapshotPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var crossRegionCopyInfo
     */
    public $crossRegionCopyInfo;
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
     * @var retainRule
     */
    public $retainRule;
    /**
     * @var schedule
     */
    public $schedule;
    /**
     * @var specialRetainRules
     */
    public $specialRetainRules;
    /**
     * @var string
     */
    public $state;
    /**
     * @var storageRule
     */
    public $storageRule;
    protected $_name = [
        'clientToken'         => 'ClientToken',
        'crossRegionCopyInfo' => 'CrossRegionCopyInfo',
        'desc'                => 'Desc',
        'name'                => 'Name',
        'policyId'            => 'PolicyId',
        'regionId'            => 'RegionId',
        'retainRule'          => 'RetainRule',
        'schedule'            => 'Schedule',
        'specialRetainRules'  => 'SpecialRetainRules',
        'state'               => 'State',
        'storageRule'         => 'StorageRule',
    ];

    public function validate()
    {
        if (null !== $this->crossRegionCopyInfo) {
            $this->crossRegionCopyInfo->validate();
        }
        if (null !== $this->retainRule) {
            $this->retainRule->validate();
        }
        if (null !== $this->schedule) {
            $this->schedule->validate();
        }
        if (null !== $this->specialRetainRules) {
            $this->specialRetainRules->validate();
        }
        if (null !== $this->storageRule) {
            $this->storageRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->crossRegionCopyInfo) {
            $res['CrossRegionCopyInfo'] = null !== $this->crossRegionCopyInfo ? $this->crossRegionCopyInfo->toArray($noStream) : $this->crossRegionCopyInfo;
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

        if (null !== $this->retainRule) {
            $res['RetainRule'] = null !== $this->retainRule ? $this->retainRule->toArray($noStream) : $this->retainRule;
        }

        if (null !== $this->schedule) {
            $res['Schedule'] = null !== $this->schedule ? $this->schedule->toArray($noStream) : $this->schedule;
        }

        if (null !== $this->specialRetainRules) {
            $res['SpecialRetainRules'] = null !== $this->specialRetainRules ? $this->specialRetainRules->toArray($noStream) : $this->specialRetainRules;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->storageRule) {
            $res['StorageRule'] = null !== $this->storageRule ? $this->storageRule->toArray($noStream) : $this->storageRule;
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
            $model->crossRegionCopyInfo = crossRegionCopyInfo::fromMap($map['CrossRegionCopyInfo']);
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

        return $model;
    }
}
