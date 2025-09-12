<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetSubscriptionAttributesRequest\dlqPolicy;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetSubscriptionAttributesRequest\tenantRateLimitPolicy;

class SetSubscriptionAttributesRequest extends Model
{
    /**
     * @var dlqPolicy
     */
    public $dlqPolicy;

    /**
     * @var string
     */
    public $notifyStrategy;

    /**
     * @var string
     */
    public $stsRoleArn;

    /**
     * @var string
     */
    public $subscriptionName;

    /**
     * @var tenantRateLimitPolicy
     */
    public $tenantRateLimitPolicy;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'dlqPolicy' => 'DlqPolicy',
        'notifyStrategy' => 'NotifyStrategy',
        'stsRoleArn' => 'StsRoleArn',
        'subscriptionName' => 'SubscriptionName',
        'tenantRateLimitPolicy' => 'TenantRateLimitPolicy',
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
        if (null !== $this->dlqPolicy) {
            $this->dlqPolicy->validate();
        }
        if (null !== $this->tenantRateLimitPolicy) {
            $this->tenantRateLimitPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dlqPolicy) {
            $res['DlqPolicy'] = null !== $this->dlqPolicy ? $this->dlqPolicy->toArray($noStream) : $this->dlqPolicy;
        }

        if (null !== $this->notifyStrategy) {
            $res['NotifyStrategy'] = $this->notifyStrategy;
        }

        if (null !== $this->stsRoleArn) {
            $res['StsRoleArn'] = $this->stsRoleArn;
        }

        if (null !== $this->subscriptionName) {
            $res['SubscriptionName'] = $this->subscriptionName;
        }

        if (null !== $this->tenantRateLimitPolicy) {
            $res['TenantRateLimitPolicy'] = null !== $this->tenantRateLimitPolicy ? $this->tenantRateLimitPolicy->toArray($noStream) : $this->tenantRateLimitPolicy;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
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
        if (isset($map['DlqPolicy'])) {
            $model->dlqPolicy = dlqPolicy::fromMap($map['DlqPolicy']);
        }

        if (isset($map['NotifyStrategy'])) {
            $model->notifyStrategy = $map['NotifyStrategy'];
        }

        if (isset($map['StsRoleArn'])) {
            $model->stsRoleArn = $map['StsRoleArn'];
        }

        if (isset($map['SubscriptionName'])) {
            $model->subscriptionName = $map['SubscriptionName'];
        }

        if (isset($map['TenantRateLimitPolicy'])) {
            $model->tenantRateLimitPolicy = tenantRateLimitPolicy::fromMap($map['TenantRateLimitPolicy']);
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
