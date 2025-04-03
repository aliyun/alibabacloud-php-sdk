<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\source;

use AlibabaCloud\Dara\Model;

class sourceDetails extends Model
{
    /**
     * @var string
     */
    public $eventSource;

    /**
     * @var string
     */
    public $maximumExecutionFrequency;

    /**
     * @var string
     */
    public $messageType;
    protected $_name = [
        'eventSource' => 'EventSource',
        'maximumExecutionFrequency' => 'MaximumExecutionFrequency',
        'messageType' => 'MessageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventSource) {
            $res['EventSource'] = $this->eventSource;
        }

        if (null !== $this->maximumExecutionFrequency) {
            $res['MaximumExecutionFrequency'] = $this->maximumExecutionFrequency;
        }

        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
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
        if (isset($map['EventSource'])) {
            $model->eventSource = $map['EventSource'];
        }

        if (isset($map['MaximumExecutionFrequency'])) {
            $model->maximumExecutionFrequency = $map['MaximumExecutionFrequency'];
        }

        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }

        return $model;
    }
}
