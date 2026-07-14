<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class NotifyPolicyConfig extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var NotifyStrategyConfig
     */
    public $notifyStrategy;

    /**
     * @var ResponsePlanConfig
     */
    public $responsePlan;

    /**
     * @var SubscriptionConfig
     */
    public $subscription;

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
        'name' => 'name',
        'notifyStrategy' => 'notifyStrategy',
        'responsePlan' => 'responsePlan',
        'subscription' => 'subscription',
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['notifyStrategy'])) {
            $model->notifyStrategy = NotifyStrategyConfig::fromMap($map['notifyStrategy']);
        }

        if (isset($map['responsePlan'])) {
            $model->responsePlan = ResponsePlanConfig::fromMap($map['responsePlan']);
        }

        if (isset($map['subscription'])) {
            $model->subscription = SubscriptionConfig::fromMap($map['subscription']);
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
