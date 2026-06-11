<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class SubscriptionAndNotifyStrategyForView extends Model
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
     * @var IncidentResponsePlanForSNSView
     */
    public $responsePlan;

    /**
     * @var SubscriptionForSNSView
     */
    public $subscription;

    /**
     * @var string
     */
    public $subscriptionUuid;

    /**
     * @var SubscriptionForView[]
     */
    public $subscriptions;

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
        'responsePlan' => 'responsePlan',
        'subscription' => 'subscription',
        'subscriptionUuid' => 'subscriptionUuid',
        'subscriptions' => 'subscriptions',
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
        if (null !== $this->responsePlan) {
            $this->responsePlan->validate();
        }
        if (null !== $this->subscription) {
            $this->subscription->validate();
        }
        if (\is_array($this->subscriptions)) {
            Model::validateArray($this->subscriptions);
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

        if (null !== $this->responsePlan) {
            $res['responsePlan'] = null !== $this->responsePlan ? $this->responsePlan->toArray($noStream) : $this->responsePlan;
        }

        if (null !== $this->subscription) {
            $res['subscription'] = null !== $this->subscription ? $this->subscription->toArray($noStream) : $this->subscription;
        }

        if (null !== $this->subscriptionUuid) {
            $res['subscriptionUuid'] = $this->subscriptionUuid;
        }

        if (null !== $this->subscriptions) {
            if (\is_array($this->subscriptions)) {
                $res['subscriptions'] = [];
                $n1 = 0;
                foreach ($this->subscriptions as $item1) {
                    $res['subscriptions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['responsePlan'])) {
            $model->responsePlan = IncidentResponsePlanForSNSView::fromMap($map['responsePlan']);
        }

        if (isset($map['subscription'])) {
            $model->subscription = SubscriptionForSNSView::fromMap($map['subscription']);
        }

        if (isset($map['subscriptionUuid'])) {
            $model->subscriptionUuid = $map['subscriptionUuid'];
        }

        if (isset($map['subscriptions'])) {
            if (!empty($map['subscriptions'])) {
                $model->subscriptions = [];
                $n1 = 0;
                foreach ($map['subscriptions'] as $item1) {
                    $model->subscriptions[$n1] = SubscriptionForView::fromMap($item1);
                    ++$n1;
                }
            }
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
