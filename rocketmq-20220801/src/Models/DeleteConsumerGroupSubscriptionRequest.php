<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class DeleteConsumerGroupSubscriptionRequest extends Model
{
    /**
     * @var string
     */
    public $filterExpression;
    /**
     * @var string
     */
    public $filterType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
