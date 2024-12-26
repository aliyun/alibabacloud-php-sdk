<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupSubscriptionResponseBody\data;

use AlibabaCloud\Tea\Model;

class subscriptionDTO extends Model
{
    /**
     * @description The consumer group ID.
     *
     * @example GID_inspector_group
     *
     * @var string
     */
    public $consumerGroupId;

    /**
     * @description The filter expression.
     *
     * @example *
     *
     * @var string
     */
    public $filterExpression;

    /**
     * @description The type of the filter expression. Valid values:
     *
     *   SQL: filters messages by using SQL expressions.
     *   TAG: filters messages by using tags.
     *
     * @example UNSPECIFIED
     *
     * @var string
     */
    public $filterExpressionType;

    /**
     * @description The consumption mode of the consumer group. Valid values:
     *
     *   BROADCASTING: broadcasting consumption
     *   CLUSTERING: clustering consumption
     *
     * @example BROADCASTING
     *
     * @var string
     */
    public $messageModel;

    /**
     * @description The subscription status. Valid values:
     *
     *   ONLINE: The consumer group is online. If the consumer group contains multiple consumers, this value is returned if at least one of the consumers is online.
     *   OFFLINE: The consumer group is offline. If the consumer group contains multiple consumers, this value is returned only if all consumers are offline.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $subscriptionStatus;

    /**
     * @description The topic to which the consumer group subscribes.
     *
     * @example Topic_normal_inspector
     *
     * @var string
     */
    public $topicName;
    protected $_name = [
        'consumerGroupId'      => 'consumerGroupId',
        'filterExpression'     => 'filterExpression',
        'filterExpressionType' => 'filterExpressionType',
        'messageModel'         => 'messageModel',
        'subscriptionStatus'   => 'subscriptionStatus',
        'topicName'            => 'topicName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerGroupId) {
            $res['consumerGroupId'] = $this->consumerGroupId;
        }
        if (null !== $this->filterExpression) {
            $res['filterExpression'] = $this->filterExpression;
        }
        if (null !== $this->filterExpressionType) {
            $res['filterExpressionType'] = $this->filterExpressionType;
        }
        if (null !== $this->messageModel) {
            $res['messageModel'] = $this->messageModel;
        }
        if (null !== $this->subscriptionStatus) {
            $res['subscriptionStatus'] = $this->subscriptionStatus;
        }
        if (null !== $this->topicName) {
            $res['topicName'] = $this->topicName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['consumerGroupId'])) {
            $model->consumerGroupId = $map['consumerGroupId'];
        }
        if (isset($map['filterExpression'])) {
            $model->filterExpression = $map['filterExpression'];
        }
        if (isset($map['filterExpressionType'])) {
            $model->filterExpressionType = $map['filterExpressionType'];
        }
        if (isset($map['messageModel'])) {
            $model->messageModel = $map['messageModel'];
        }
        if (isset($map['subscriptionStatus'])) {
            $model->subscriptionStatus = $map['subscriptionStatus'];
        }
        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }

        return $model;
    }
}
