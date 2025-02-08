<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\ListSubscriptionByTopicResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\ListSubscriptionByTopicResponseBody\data\pageData\dlqPolicy;

class pageData extends Model
{
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var dlqPolicy
     */
    public $dlqPolicy;
    /**
     * @var string
     */
    public $endpoint;
    /**
     * @var string
     */
    public $filterTag;
    /**
     * @var int
     */
    public $lastModifyTime;
    /**
     * @var string
     */
    public $notifyContentFormat;
    /**
     * @var string
     */
    public $notifyStrategy;
    /**
     * @var string
     */
    public $subscriptionName;
    /**
     * @var string
     */
    public $topicName;
    /**
     * @var string
     */
    public $topicOwner;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'dlqPolicy'           => 'DlqPolicy',
        'endpoint'            => 'Endpoint',
        'filterTag'           => 'FilterTag',
        'lastModifyTime'      => 'LastModifyTime',
        'notifyContentFormat' => 'NotifyContentFormat',
        'notifyStrategy'      => 'NotifyStrategy',
        'subscriptionName'    => 'SubscriptionName',
        'topicName'           => 'TopicName',
        'topicOwner'          => 'TopicOwner',
    ];

    public function validate()
    {
        if (null !== $this->dlqPolicy) {
            $this->dlqPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dlqPolicy) {
            $res['DlqPolicy'] = null !== $this->dlqPolicy ? $this->dlqPolicy->toArray($noStream) : $this->dlqPolicy;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->filterTag) {
            $res['FilterTag'] = $this->filterTag;
        }

        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }

        if (null !== $this->notifyContentFormat) {
            $res['NotifyContentFormat'] = $this->notifyContentFormat;
        }

        if (null !== $this->notifyStrategy) {
            $res['NotifyStrategy'] = $this->notifyStrategy;
        }

        if (null !== $this->subscriptionName) {
            $res['SubscriptionName'] = $this->subscriptionName;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }

        if (null !== $this->topicOwner) {
            $res['TopicOwner'] = $this->topicOwner;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DlqPolicy'])) {
            $model->dlqPolicy = dlqPolicy::fromMap($map['DlqPolicy']);
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['FilterTag'])) {
            $model->filterTag = $map['FilterTag'];
        }

        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }

        if (isset($map['NotifyContentFormat'])) {
            $model->notifyContentFormat = $map['NotifyContentFormat'];
        }

        if (isset($map['NotifyStrategy'])) {
            $model->notifyStrategy = $map['NotifyStrategy'];
        }

        if (isset($map['SubscriptionName'])) {
            $model->subscriptionName = $map['SubscriptionName'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        if (isset($map['TopicOwner'])) {
            $model->topicOwner = $map['TopicOwner'];
        }

        return $model;
    }
}
