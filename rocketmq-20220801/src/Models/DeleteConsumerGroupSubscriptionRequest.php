<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class DeleteConsumerGroupSubscriptionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $filterExpression;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $filterType;

    /**
     * @description This parameter is required.
     *
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
