<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class SubscriptionAndNotifyStrategyForListView extends Model
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
    public $enabled;

    /**
     * @var string
     */
    public $migrationBatchId;

    /**
     * @var string
     */
    public $migrationMeta;

    /**
     * @var string
     */
    public $name;

    /**
     * @var NotifyStrategyForSNSView
     */
    public $notifyStrategy;

    /**
     * @var string
     */
    public $notifyStrategyUuid;

    /**
     * @var string
     */
    public $subscriptionUuid;

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
     * @var int
     */
    public $version;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'enabled' => 'enabled',
        'migrationBatchId' => 'migrationBatchId',
        'migrationMeta' => 'migrationMeta',
        'name' => 'name',
        'notifyStrategy' => 'notifyStrategy',
        'notifyStrategyUuid' => 'notifyStrategyUuid',
        'subscriptionUuid' => 'subscriptionUuid',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
        'uuid' => 'uuid',
        'version' => 'version',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->notifyStrategy) {
            $this->notifyStrategy->validate();
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

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->migrationBatchId) {
            $res['migrationBatchId'] = $this->migrationBatchId;
        }

        if (null !== $this->migrationMeta) {
            $res['migrationMeta'] = $this->migrationMeta;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->notifyStrategy) {
            $res['notifyStrategy'] = null !== $this->notifyStrategy ? $this->notifyStrategy->toArray($noStream) : $this->notifyStrategy;
        }

        if (null !== $this->notifyStrategyUuid) {
            $res['notifyStrategyUuid'] = $this->notifyStrategyUuid;
        }

        if (null !== $this->subscriptionUuid) {
            $res['subscriptionUuid'] = $this->subscriptionUuid;
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

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['migrationBatchId'])) {
            $model->migrationBatchId = $map['migrationBatchId'];
        }

        if (isset($map['migrationMeta'])) {
            $model->migrationMeta = $map['migrationMeta'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['notifyStrategy'])) {
            $model->notifyStrategy = NotifyStrategyForSNSView::fromMap($map['notifyStrategy']);
        }

        if (isset($map['notifyStrategyUuid'])) {
            $model->notifyStrategyUuid = $map['notifyStrategyUuid'];
        }

        if (isset($map['subscriptionUuid'])) {
            $model->subscriptionUuid = $map['subscriptionUuid'];
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

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
