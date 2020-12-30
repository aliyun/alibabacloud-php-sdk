<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

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
    public $targetRegionId;

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
    public $targetRepoName;

    /**
     * @var string
     */
    public $tagFilter;

    /**
     * @var string
     */
    public $syncScope;

    /**
     * @var string
     */
    public $syncRuleName;

    /**
     * @var string
     */
    public $syncTrigger;
    protected $_name = [
        'instanceId'          => 'InstanceId',
        'namespaceName'       => 'NamespaceName',
        'repoName'            => 'RepoName',
        'targetRegionId'      => 'TargetRegionId',
        'targetInstanceId'    => 'TargetInstanceId',
        'targetNamespaceName' => 'TargetNamespaceName',
        'targetRepoName'      => 'TargetRepoName',
        'tagFilter'           => 'TagFilter',
        'syncScope'           => 'SyncScope',
        'syncRuleName'        => 'SyncRuleName',
        'syncTrigger'         => 'SyncTrigger',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->targetRegionId) {
            $res['TargetRegionId'] = $this->targetRegionId;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->targetNamespaceName) {
            $res['TargetNamespaceName'] = $this->targetNamespaceName;
        }
        if (null !== $this->targetRepoName) {
            $res['TargetRepoName'] = $this->targetRepoName;
        }
        if (null !== $this->tagFilter) {
            $res['TagFilter'] = $this->tagFilter;
        }
        if (null !== $this->syncScope) {
            $res['SyncScope'] = $this->syncScope;
        }
        if (null !== $this->syncRuleName) {
            $res['SyncRuleName'] = $this->syncRuleName;
        }
        if (null !== $this->syncTrigger) {
            $res['SyncTrigger'] = $this->syncTrigger;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRepoSyncRuleRequest
     */
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
        if (isset($map['TargetRegionId'])) {
            $model->targetRegionId = $map['TargetRegionId'];
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['TargetNamespaceName'])) {
            $model->targetNamespaceName = $map['TargetNamespaceName'];
        }
        if (isset($map['TargetRepoName'])) {
            $model->targetRepoName = $map['TargetRepoName'];
        }
        if (isset($map['TagFilter'])) {
            $model->tagFilter = $map['TagFilter'];
        }
        if (isset($map['SyncScope'])) {
            $model->syncScope = $map['SyncScope'];
        }
        if (isset($map['SyncRuleName'])) {
            $model->syncRuleName = $map['SyncRuleName'];
        }
        if (isset($map['SyncTrigger'])) {
            $model->syncTrigger = $map['SyncTrigger'];
        }

        return $model;
    }
}
