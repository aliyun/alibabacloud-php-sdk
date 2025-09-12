<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Dara\Model;

class SetSubscriptionAttributesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dlqPolicyShrink;

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
     * @var string
     */
    public $tenantRateLimitPolicyShrink;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'dlqPolicyShrink' => 'DlqPolicy',
        'notifyStrategy' => 'NotifyStrategy',
        'stsRoleArn' => 'StsRoleArn',
        'subscriptionName' => 'SubscriptionName',
        'tenantRateLimitPolicyShrink' => 'TenantRateLimitPolicy',
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dlqPolicyShrink) {
            $res['DlqPolicy'] = $this->dlqPolicyShrink;
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

        if (null !== $this->tenantRateLimitPolicyShrink) {
            $res['TenantRateLimitPolicy'] = $this->tenantRateLimitPolicyShrink;
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
            $model->dlqPolicyShrink = $map['DlqPolicy'];
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
            $model->tenantRateLimitPolicyShrink = $map['TenantRateLimitPolicy'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
