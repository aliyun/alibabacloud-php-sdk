<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class SubscriptionAndNotifyStrategyForModify extends Model
{
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
    public $name;

    /**
     * @var NotifyStrategyForSNSModify
     */
    public $notifyStrategy;

    /**
     * @var IncidentResponsePlanForSNSModify
     */
    public $responsePlan;

    /**
     * @var SubscriptionForSNSModify
     */
    public $subscription;

    /**
     * @var SubscriptionOp[]
     */
    public $subscriptions;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'description' => 'description',
        'enabled' => 'enabled',
        'name' => 'name',
        'notifyStrategy' => 'notifyStrategy',
        'responsePlan' => 'responsePlan',
        'subscription' => 'subscription',
        'subscriptions' => 'subscriptions',
        'uuid' => 'uuid',
        'version' => 'version',
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
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->notifyStrategy) {
            $res['notifyStrategy'] = null !== $this->notifyStrategy ? $this->notifyStrategy->toArray($noStream) : $this->notifyStrategy;
        }

        if (null !== $this->responsePlan) {
            $res['responsePlan'] = null !== $this->responsePlan ? $this->responsePlan->toArray($noStream) : $this->responsePlan;
        }

        if (null !== $this->subscription) {
            $res['subscription'] = null !== $this->subscription ? $this->subscription->toArray($noStream) : $this->subscription;
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

        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['notifyStrategy'])) {
            $model->notifyStrategy = NotifyStrategyForSNSModify::fromMap($map['notifyStrategy']);
        }

        if (isset($map['responsePlan'])) {
            $model->responsePlan = IncidentResponsePlanForSNSModify::fromMap($map['responsePlan']);
        }

        if (isset($map['subscription'])) {
            $model->subscription = SubscriptionForSNSModify::fromMap($map['subscription']);
        }

        if (isset($map['subscriptions'])) {
            if (!empty($map['subscriptions'])) {
                $model->subscriptions = [];
                $n1 = 0;
                foreach ($map['subscriptions'] as $item1) {
                    $model->subscriptions[$n1] = SubscriptionOp::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
