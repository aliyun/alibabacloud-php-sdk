<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\ListSubscriptionByTopicResponseBody\data;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @example 1449554806
     *
     * @var int
     */
    public $createTime;

    /**
     * @example http://example.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example important
     *
     * @var string
     */
    public $filterTag;

    /**
     * @example 1449554806
     *
     * @var int
     */
    public $lastModifyTime;

    /**
     * @example XML
     *
     * @var string
     */
    public $notifyContentFormat;

    /**
     * @example BACKOFF_RETRY
     *
     * @var string
     */
    public $notifyStrategy;

    /**
     * @example MySubscription
     *
     * @var string
     */
    public $subscriptionName;

    /**
     * @example MyTopic
     *
     * @var string
     */
    public $topicName;

    /**
     * @example 123456789098****
     *
     * @var string
     */
    public $topicOwner;
    protected $_name = [
        'createTime'          => 'CreateTime',
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

    /**
     * @param array $map
     *
     * @return pageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
