<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncRuleResponseBody;

use AlibabaCloud\Tea\Model;

class syncRules extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $crossUser;

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
    public $localRegionId;

    /**
     * @var string
     */
    public $localRepoName;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $syncDirection;

    /**
     * @var string
     */
    public $syncRuleId;

    /**
     * @var string
     */
    public $syncRuleName;

    /**
     * @var string
     */
    public $syncScope;

    /**
     * @var string
     */
    public $syncTrigger;

    /**
     * @var string
     */
    public $tagFilter;

    /**
     * @var string
     */
    public $targetInstanceId;

    /**
     * @var string
     */
    public $targetNamespaceName;

    /**
     * @var string
     */
    public $targetRegionId;

    /**
     * @var string
     */
    public $targetRepoName;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'crossUser'           => 'CrossUser',
        'localInstanceId'     => 'LocalInstanceId',
        'localNamespaceName'  => 'LocalNamespaceName',
        'localRegionId'       => 'LocalRegionId',
        'localRepoName'       => 'LocalRepoName',
        'modifiedTime'        => 'ModifiedTime',
        'syncDirection'       => 'SyncDirection',
        'syncRuleId'          => 'SyncRuleId',
        'syncRuleName'        => 'SyncRuleName',
        'syncScope'           => 'SyncScope',
        'syncTrigger'         => 'SyncTrigger',
        'tagFilter'           => 'TagFilter',
        'targetInstanceId'    => 'TargetInstanceId',
        'targetNamespaceName' => 'TargetNamespaceName',
        'targetRegionId'      => 'TargetRegionId',
        'targetRepoName'      => 'TargetRepoName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->crossUser) {
            $res['CrossUser'] = $this->crossUser;
        }
        if (null !== $this->localInstanceId) {
            $res['LocalInstanceId'] = $this->localInstanceId;
        }
        if (null !== $this->localNamespaceName) {
            $res['LocalNamespaceName'] = $this->localNamespaceName;
        }
        if (null !== $this->localRegionId) {
            $res['LocalRegionId'] = $this->localRegionId;
        }
        if (null !== $this->localRepoName) {
            $res['LocalRepoName'] = $this->localRepoName;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->syncDirection) {
            $res['SyncDirection'] = $this->syncDirection;
        }
        if (null !== $this->syncRuleId) {
            $res['SyncRuleId'] = $this->syncRuleId;
        }
        if (null !== $this->syncRuleName) {
            $res['SyncRuleName'] = $this->syncRuleName;
        }
        if (null !== $this->syncScope) {
            $res['SyncScope'] = $this->syncScope;
        }
        if (null !== $this->syncTrigger) {
            $res['SyncTrigger'] = $this->syncTrigger;
        }
        if (null !== $this->tagFilter) {
            $res['TagFilter'] = $this->tagFilter;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->targetNamespaceName) {
            $res['TargetNamespaceName'] = $this->targetNamespaceName;
        }
        if (null !== $this->targetRegionId) {
            $res['TargetRegionId'] = $this->targetRegionId;
        }
        if (null !== $this->targetRepoName) {
            $res['TargetRepoName'] = $this->targetRepoName;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CrossUser'])) {
            $model->crossUser = $map['CrossUser'];
        }
        if (isset($map['LocalInstanceId'])) {
            $model->localInstanceId = $map['LocalInstanceId'];
        }
        if (isset($map['LocalNamespaceName'])) {
            $model->localNamespaceName = $map['LocalNamespaceName'];
        }
        if (isset($map['LocalRegionId'])) {
            $model->localRegionId = $map['LocalRegionId'];
        }
        if (isset($map['LocalRepoName'])) {
            $model->localRepoName = $map['LocalRepoName'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['SyncDirection'])) {
            $model->syncDirection = $map['SyncDirection'];
        }
        if (isset($map['SyncRuleId'])) {
            $model->syncRuleId = $map['SyncRuleId'];
        }
        if (isset($map['SyncRuleName'])) {
            $model->syncRuleName = $map['SyncRuleName'];
        }
        if (isset($map['SyncScope'])) {
            $model->syncScope = $map['SyncScope'];
        }
        if (isset($map['SyncTrigger'])) {
            $model->syncTrigger = $map['SyncTrigger'];
        }
        if (isset($map['TagFilter'])) {
            $model->tagFilter = $map['TagFilter'];
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['TargetNamespaceName'])) {
            $model->targetNamespaceName = $map['TargetNamespaceName'];
        }
        if (isset($map['TargetRegionId'])) {
            $model->targetRegionId = $map['TargetRegionId'];
        }
        if (isset($map['TargetRepoName'])) {
            $model->targetRepoName = $map['TargetRepoName'];
        }

        return $model;
    }
}
