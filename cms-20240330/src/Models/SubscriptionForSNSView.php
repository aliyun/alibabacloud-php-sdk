<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class SubscriptionForSNSView extends Model
{
    /**
     * @var string
     */
    public $createTime;

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
    public $mode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $notifyStrategyUuid;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $subscriptionType;

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
    public $uuid;

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
        'enable' => 'enable',
        'filterSetting' => 'filterSetting',
        'mode' => 'mode',
        'name' => 'name',
        'notifyStrategyUuid' => 'notifyStrategyUuid',
        'regionId' => 'regionId',
        'subscriptionType' => 'subscriptionType',
        'syncFromType' => 'syncFromType',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
        'uuid' => 'uuid',
        'workspace' => 'workspace',
        'workspaceFilterSetting' => 'workspaceFilterSetting',
    ];

    public function validate()
    {
        if (null !== $this->filterSetting) {
            $this->filterSetting->validate();
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

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->filterSetting) {
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toArray($noStream) : $this->filterSetting;
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->notifyStrategyUuid) {
            $res['notifyStrategyUuid'] = $this->notifyStrategyUuid;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->subscriptionType) {
            $res['subscriptionType'] = $this->subscriptionType;
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

        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
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

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['filterSetting'])) {
            $model->filterSetting = FilterSetting::fromMap($map['filterSetting']);
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['notifyStrategyUuid'])) {
            $model->notifyStrategyUuid = $map['notifyStrategyUuid'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['subscriptionType'])) {
            $model->subscriptionType = $map['subscriptionType'];
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

        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
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
