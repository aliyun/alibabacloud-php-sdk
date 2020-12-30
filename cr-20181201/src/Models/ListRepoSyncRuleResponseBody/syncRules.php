<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncRuleResponseBody;

use AlibabaCloud\Tea\Model;

class syncRules extends Model
{
    /**
     * @var string
     */
    public $syncTrigger;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $localRegionId;

    /**
     * @var string
     */
    public $syncScope;

    /**
     * @var string
     */
    public $tagFilter;

    /**
     * @var string
     */
    public $targetNamespaceName;

    /**
     * @var string
     */
    public $targetRepoName;

    /**
     * @var string
     */
    public $targetInstanceId;

    /**
     * @var string
     */
    public $syncRuleId;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $syncRuleName;

    /**
     * @var string
     */
    public $targetRegionId;

    /**
     * @var string
     */
    public $localInstanceId;

    /**
     * @var string
     */
    public $localNamespaceName;

    /**
     * @var string
     */
    public $localRepoName;

    /**
     * @var string
     */
    public $syncDirection;
    protected $_name = [
        'syncTrigger'         => 'SyncTrigger',
        'createTime'          => 'CreateTime',
        'localRegionId'       => 'LocalRegionId',
        'syncScope'           => 'SyncScope',
        'tagFilter'           => 'TagFilter',
        'targetNamespaceName' => 'TargetNamespaceName',
        'targetRepoName'      => 'TargetRepoName',
        'targetInstanceId'    => 'TargetInstanceId',
        'syncRuleId'          => 'SyncRuleId',
        'modifiedTime'        => 'ModifiedTime',
        'syncRuleName'        => 'SyncRuleName',
        'targetRegionId'      => 'TargetRegionId',
        'localInstanceId'     => 'LocalInstanceId',
        'localNamespaceName'  => 'LocalNamespaceName',
        'localRepoName'       => 'LocalRepoName',
        'syncDirection'       => 'SyncDirection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->syncTrigger) {
            $res['SyncTrigger'] = $this->syncTrigger;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->localRegionId) {
            $res['LocalRegionId'] = $this->localRegionId;
        }
        if (null !== $this->syncScope) {
            $res['SyncScope'] = $this->syncScope;
        }
        if (null !== $this->tagFilter) {
            $res['TagFilter'] = $this->tagFilter;
        }
        if (null !== $this->targetNamespaceName) {
            $res['TargetNamespaceName'] = $this->targetNamespaceName;
        }
        if (null !== $this->targetRepoName) {
            $res['TargetRepoName'] = $this->targetRepoName;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->syncRuleId) {
            $res['SyncRuleId'] = $this->syncRuleId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->syncRuleName) {
            $res['SyncRuleName'] = $this->syncRuleName;
        }
        if (null !== $this->targetRegionId) {
            $res['TargetRegionId'] = $this->targetRegionId;
        }
        if (null !== $this->localInstanceId) {
            $res['LocalInstanceId'] = $this->localInstanceId;
        }
        if (null !== $this->localNamespaceName) {
            $res['LocalNamespaceName'] = $this->localNamespaceName;
        }
        if (null !== $this->localRepoName) {
            $res['LocalRepoName'] = $this->localRepoName;
        }
        if (null !== $this->syncDirection) {
            $res['SyncDirection'] = $this->syncDirection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return syncRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SyncTrigger'])) {
            $model->syncTrigger = $map['SyncTrigger'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LocalRegionId'])) {
            $model->localRegionId = $map['LocalRegionId'];
        }
        if (isset($map['SyncScope'])) {
            $model->syncScope = $map['SyncScope'];
        }
        if (isset($map['TagFilter'])) {
            $model->tagFilter = $map['TagFilter'];
        }
        if (isset($map['TargetNamespaceName'])) {
            $model->targetNamespaceName = $map['TargetNamespaceName'];
        }
        if (isset($map['TargetRepoName'])) {
            $model->targetRepoName = $map['TargetRepoName'];
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['SyncRuleId'])) {
            $model->syncRuleId = $map['SyncRuleId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['SyncRuleName'])) {
            $model->syncRuleName = $map['SyncRuleName'];
        }
        if (isset($map['TargetRegionId'])) {
            $model->targetRegionId = $map['TargetRegionId'];
        }
        if (isset($map['LocalInstanceId'])) {
            $model->localInstanceId = $map['LocalInstanceId'];
        }
        if (isset($map['LocalNamespaceName'])) {
            $model->localNamespaceName = $map['LocalNamespaceName'];
        }
        if (isset($map['LocalRepoName'])) {
            $model->localRepoName = $map['LocalRepoName'];
        }
        if (isset($map['SyncDirection'])) {
            $model->syncDirection = $map['SyncDirection'];
        }

        return $model;
    }
}
