<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Tea\Model;

class SubscribeRequest extends Model
{
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
    public $messageTag;

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
     * @example queue
     *
     * @var string
     */
    public $pushType;

    /**
     * @example testSubscription
     *
     * @var string
     */
    public $subscriptionName;

    /**
     * @example test
     *
     * @var string
     */
    public $topicName;
    protected $_name = [
        'endpoint'            => 'Endpoint',
        'messageTag'          => 'MessageTag',
        'notifyContentFormat' => 'NotifyContentFormat',
        'notifyStrategy'      => 'NotifyStrategy',
        'pushType'            => 'PushType',
        'subscriptionName'    => 'SubscriptionName',
        'topicName'           => 'TopicName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->messageTag) {
            $res['MessageTag'] = $this->messageTag;
        }
        if (null !== $this->notifyContentFormat) {
            $res['NotifyContentFormat'] = $this->notifyContentFormat;
        }
        if (null !== $this->notifyStrategy) {
            $res['NotifyStrategy'] = $this->notifyStrategy;
        }
        if (null !== $this->pushType) {
            $res['PushType'] = $this->pushType;
        }
        if (null !== $this->subscriptionName) {
            $res['SubscriptionName'] = $this->subscriptionName;
        }
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubscribeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['MessageTag'])) {
            $model->messageTag = $map['MessageTag'];
        }
        if (isset($map['NotifyContentFormat'])) {
            $model->notifyContentFormat = $map['NotifyContentFormat'];
        }
        if (isset($map['NotifyStrategy'])) {
            $model->notifyStrategy = $map['NotifyStrategy'];
        }
        if (isset($map['PushType'])) {
            $model->pushType = $map['PushType'];
        }
        if (isset($map['SubscriptionName'])) {
            $model->subscriptionName = $map['SubscriptionName'];
        }
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
