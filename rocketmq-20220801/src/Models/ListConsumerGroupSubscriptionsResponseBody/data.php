<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerGroupSubscriptionsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example CID-TEST
     *
     * @var string
     */
    public $consumerGroupId;

    /**
     * @example *
     *
     * @var string
     */
    public $filterExpression;

    /**
     * @example SQL
     *
     * @var string
     */
    public $filterExpressionType;

    /**
     * @example BROADCASTING
     *
     * @var string
     */
    public $messageModel;

    /**
     * @example ONLINE
     *
     * @var string
     */
    public $subscriptionStatus;

    /**
     * @example true
     *
     * @var bool
     */
    public $topicCreated;

    /**
     * @example topic_test
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
        'topicCreated'         => 'topicCreated',
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
        if (null !== $this->topicCreated) {
            $res['topicCreated'] = $this->topicCreated;
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
        if (isset($map['topicCreated'])) {
            $model->topicCreated = $map['topicCreated'];
        }
        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }

        return $model;
    }
}
