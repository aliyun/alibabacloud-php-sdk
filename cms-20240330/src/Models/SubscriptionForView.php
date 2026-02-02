<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\SubscriptionForView\pushingSetting;

class SubscriptionForView extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var FilterSetting
     */
    public $filterSetting;

    /**
     * @var string
     */
    public $notifyStrategyId;

    /**
     * @var pushingSetting
     */
    public $pushingSetting;

    /**
     * @var string
     */
    public $subscriptionId;

    /**
     * @var string
     */
    public $subscriptionName;

    /**
     * @var string
     */
    public $syncFromType;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workspace;

    /**
     * @var WorkspaceFilterSetting
     */
    public $workspaceFilterSetting;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'enable' => 'enable',
        'filterSetting' => 'filterSetting',
        'notifyStrategyId' => 'notifyStrategyId',
        'pushingSetting' => 'pushingSetting',
        'subscriptionId' => 'subscriptionId',
        'subscriptionName' => 'subscriptionName',
        'syncFromType' => 'syncFromType',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
        'workspace' => 'workspace',
        'workspaceFilterSetting' => 'workspaceFilterSetting',
    ];

    public function validate()
    {
        if (null !== $this->filterSetting) {
            $this->filterSetting->validate();
        }
        if (null !== $this->pushingSetting) {
            $this->pushingSetting->validate();
        }
        if (null !== $this->workspaceFilterSetting) {
            $this->workspaceFilterSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->filterSetting) {
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toArray($noStream) : $this->filterSetting;
        }

        if (null !== $this->notifyStrategyId) {
            $res['notifyStrategyId'] = $this->notifyStrategyId;
        }

        if (null !== $this->pushingSetting) {
            $res['pushingSetting'] = null !== $this->pushingSetting ? $this->pushingSetting->toArray($noStream) : $this->pushingSetting;
        }

        if (null !== $this->subscriptionId) {
            $res['subscriptionId'] = $this->subscriptionId;
        }

        if (null !== $this->subscriptionName) {
            $res['subscriptionName'] = $this->subscriptionName;
        }

        if (null !== $this->syncFromType) {
            $res['syncFromType'] = $this->syncFromType;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        if (null !== $this->workspaceFilterSetting) {
            $res['workspaceFilterSetting'] = null !== $this->workspaceFilterSetting ? $this->workspaceFilterSetting->toArray($noStream) : $this->workspaceFilterSetting;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['filterSetting'])) {
            $model->filterSetting = FilterSetting::fromMap($map['filterSetting']);
        }

        if (isset($map['notifyStrategyId'])) {
            $model->notifyStrategyId = $map['notifyStrategyId'];
        }

        if (isset($map['pushingSetting'])) {
            $model->pushingSetting = pushingSetting::fromMap($map['pushingSetting']);
        }

        if (isset($map['subscriptionId'])) {
            $model->subscriptionId = $map['subscriptionId'];
        }

        if (isset($map['subscriptionName'])) {
            $model->subscriptionName = $map['subscriptionName'];
        }

        if (isset($map['syncFromType'])) {
            $model->syncFromType = $map['syncFromType'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        if (isset($map['workspaceFilterSetting'])) {
            $model->workspaceFilterSetting = WorkspaceFilterSetting::fromMap($map['workspaceFilterSetting']);
        }

        return $model;
    }
}
