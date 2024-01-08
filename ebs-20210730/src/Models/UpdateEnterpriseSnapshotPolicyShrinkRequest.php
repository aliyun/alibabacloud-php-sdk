<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class UpdateEnterpriseSnapshotPolicyShrinkRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Snapshot replication destination information.
     *
     * @var string
     */
    public $crossRegionCopyInfoShrink;

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
     * @example xxx
     *
     * @var string
     */
    public $name;

    /**
     * @description The id of the policy.
     *
     * @example esp-xxx
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The region ID . You can call the [DescribeRegions](~~354276~~) operation to query the most recent list of regions in which snapshot policy is supported.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Snapshot retention rule.
     *
     * @var string
     */
    public $retainRuleShrink;

    /**
     * @description The rule for scheduling.
     *
     * @var string
     */
    public $scheduleShrink;

    /**
     * @description The special snapshot retention rules.
     *
     * @var string
     */
    public $specialRetainRulesShrink;

    /**
     * @description The status of the policy. Valid values:
     *
     *   **ENABLED**: Enable snapshot policy execution.
     *   **DISABLED**: Disable snapshot policy execution.
     *
     * @example ENABLED
     *
     * @var string
     */
    public $state;

    /**
     * @description Advanced snapshot features.
     *
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

    /**
     * @param array $map
     *
     * @return UpdateEnterpriseSnapshotPolicyShrinkRequest
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
