<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupSubscriptionResponseBody\data;

use AlibabaCloud\Tea\Model;

class subscriptionDTO extends Model
{
    /**
     * @example GID_inspector_group
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
     * @example UNSPECIFIED
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
