<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class DeleteConsumerGroupSubscriptionRequest extends Model
{
    /**
     * @description The filter expression.
     *
     * This parameter is required.
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
     * Valid values:
     *
     *   TAG: filters messages by using SQL expressions.
     *   SQL: filters messages by using SQL expressions.
     *
     * This parameter is required.
     * @example TAG
     *
     * @var string
     */
    public $filterType;

    /**
     * @description The topic name.
     *
     * This parameter is required.
     * @example topic_test
     *
     * @var string
     */
    public $topicName;
    protected $_name = [
        'filterExpression' => 'filterExpression',
        'filterType'       => 'filterType',
        'topicName'        => 'topicName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterExpression) {
            $res['filterExpression'] = $this->filterExpression;
        }
        if (null !== $this->filterType) {
            $res['filterType'] = $this->filterType;
        }
        if (null !== $this->topicName) {
            $res['topicName'] = $this->topicName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteConsumerGroupSubscriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['filterExpression'])) {
            $model->filterExpression = $map['filterExpression'];
        }
        if (isset($map['filterType'])) {
            $model->filterType = $map['filterType'];
        }
        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }

        return $model;
    }
}
