<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncRuleResponseBody;

use AlibabaCloud\Tea\Model;

class syncRules extends Model
{
    /**
     * @description The time when the synchronization rule was created.
     *
     * @example 1572604642000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description Indicates whether images are synchronized across Alibaba Cloud accounts. Valid values:
     *
     *   `true`: Images are synchronized across Alibaba Cloud accounts.
     *   `false`: Images are synchronized within the same Alibaba Cloud account.
     *
     * Default value: `false`
     * @example true
     *
     * @var bool
     */
    public $crossUser;

    /**
     * @description The ID of the source instance.
     *
     * @example cri-kmsiwlxxdcva****
     *
     * @var string
     */
    public $localInstanceId;

    /**
     * @description The namespace name of the source instance.
     *
     * @example test
     *
     * @var string
     */
    public $localNamespaceName;

    /**
     * @description The region ID of the source instance.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $localRegionId;

    /**
     * @description The image repository name of the source instance.
     *
     * @example test-repo-local
     *
     * @var string
     */
    public $localRepoName;

    /**
     * @description The time when the synchronization rule was last modified.
     *
     * @example 1572604642000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @description The synchronization direction. Valid values:
     *
     *   `FROM`: Images are synchronized from the source instance to the destination instance.
     *   `TO`: Images are synchronized from the destination instance to the source instance.
     *
     * @example FROM
     *
     * @var string
     */
    public $syncDirection;

    /**
     * @description The ID of the synchronization rule.
     *
     * @example crsr-7lph66uloi6h****
     *
     * @var string
     */
    public $syncRuleId;

    /**
     * @description The name of the synchronization rule.
     *
     * @example sync-rule-1
     *
     * @var string
     */
    public $syncRuleName;

    /**
     * @description The synchronization scope. Valid values:
     *
     *   `NAMESPACE`: synchronizes the image tags in a namespace that meet the synchronization rule.
     *   `REPO`: synchronizes the image tags in an image repository that meet the synchronization rule.
     *
     * @example NAMESPACE
     *
     * @var string
     */
    public $syncScope;

    /**
     * @description The policy that is applied to trigger the synchronization rule. Valid values:
     *
     *   `INITIATIVE`: The synchronization rule is positively triggered.
     *   `PASSIVE`: The synchronization rule is passively triggered.
     *
     * @example PASSIVE
     *
     * @var string
     */
    public $syncTrigger;

    /**
     * @description The regular expression that is used to filter image tags.
     *
     * @example .*
     *
     * @var string
     */
    public $tagFilter;

    /**
     * @description The ID of the destination instance.
     *
     * @example cri-k77rd2eo9ztt****
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @description The namespace name of the destination instance.
     *
     * @example test
     *
     * @var string
     */
    public $targetNamespaceName;

    /**
     * @description The region ID of the destination instance.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $targetRegionId;

    /**
     * @description The image repository name of the destination instance.
     *
     * @example test-repo-target
     *
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
