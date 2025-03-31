<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class CreateRepoSyncRuleRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $repoNameFilter;

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

    /**
     * @var string
     */
    public $targetUserId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'namespaceName' => 'NamespaceName',
        'repoName' => 'RepoName',
        'repoNameFilter' => 'RepoNameFilter',
        'syncRuleName' => 'SyncRuleName',
        'syncScope' => 'SyncScope',
        'syncTrigger' => 'SyncTrigger',
        'tagFilter' => 'TagFilter',
        'targetInstanceId' => 'TargetInstanceId',
        'targetNamespaceName' => 'TargetNamespaceName',
        'targetRegionId' => 'TargetRegionId',
        'targetRepoName' => 'TargetRepoName',
        'targetUserId' => 'TargetUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }

        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }

        if (null !== $this->repoNameFilter) {
            $res['RepoNameFilter'] = $this->repoNameFilter;
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

        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }

        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }

        if (isset($map['RepoNameFilter'])) {
            $model->repoNameFilter = $map['RepoNameFilter'];
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

        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }

        return $model;
    }
}
