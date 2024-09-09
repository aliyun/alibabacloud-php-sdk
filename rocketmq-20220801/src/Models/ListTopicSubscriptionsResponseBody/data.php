<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTopicSubscriptionsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether message consumption is consistent. Valid values:
     *
     *   false: Unconsumed messages exist in the consumer group.
     *   true: No unconsumed message exists in the consumer group.
     *
     * @example true
     *
     * @var string
     */
    public $consistency;

    /**
     * @description The consumer group ID.
     *
     * @example CID-TEST
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
     * @description The type of the filter expression. Valid values: SQL, TAG, and UNSPECIFIED. The value SQL indicates that messages are filtered by using SQL expressions. The value TAG indicates that messages are filtered by using tags. The value UNSPECIFIED indicates that no filter expression type is specified.
     *
     * @example SQL
     *
     * @var string
     */
    public $filterExpressionType;

    /**
     * @description The consumption mode. Valid values: BROADCASTING and CLUSTERING.
     *
     * @example BROADCASTING
     *
     * @var string
     */
    public $messageModel;

    /**
     * @description The subscription status. Valid values: ONLINE and OFFLINE.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $subscriptionStatus;

    /**
     * @description The topic name.
     *
     * @example topic_test
     *
     * @var string
     */
    public $topicName;
    protected $_name = [
        'consistency'          => 'consistency',
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
        if (null !== $this->consistency) {
            $res['consistency'] = $this->consistency;
        }
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['consistency'])) {
            $model->consistency = $map['consistency'];
        }
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
