<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTopicSubscriptionsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $consistency;

    /**
     * @var string
     */
    public $consumerGroupId;

    /**
     * @var string
     */
    public $filterExpression;

    /**
     * @var string
     */
    public $filterExpressionType;

    /**
     * @var string
     */
    public $messageModel;

    /**
     * @var string
     */
    public $subscriptionStatus;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'consistency' => 'consistency',
        'consumerGroupId' => 'consumerGroupId',
        'filterExpression' => 'filterExpression',
        'filterExpressionType' => 'filterExpressionType',
        'messageModel' => 'messageModel',
        'subscriptionStatus' => 'subscriptionStatus',
        'topicName' => 'topicName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
