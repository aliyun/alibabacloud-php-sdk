<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListAITaskEventsResponseBody;

use AlibabaCloud\Dara\Model;

class events extends Model
{
    /**
     * @var string
     */
    public $agentType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $estimatedProcessingTime;

    /**
     * @var string
     */
    public $eventData;

    /**
     * @var string
     */
    public $handlerProcessStatus;

    /**
     * @var string
     */
    public $handlerType;
    protected $_name = [
        'agentType' => 'AgentType',
        'createTime' => 'CreateTime',
        'estimatedProcessingTime' => 'EstimatedProcessingTime',
        'eventData' => 'EventData',
        'handlerProcessStatus' => 'HandlerProcessStatus',
        'handlerType' => 'HandlerType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->estimatedProcessingTime) {
            $res['EstimatedProcessingTime'] = $this->estimatedProcessingTime;
        }

        if (null !== $this->eventData) {
            $res['EventData'] = $this->eventData;
        }

        if (null !== $this->handlerProcessStatus) {
            $res['HandlerProcessStatus'] = $this->handlerProcessStatus;
        }

        if (null !== $this->handlerType) {
            $res['HandlerType'] = $this->handlerType;
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
        if (isset($map['AgentType'])) {
            $model->agentType = $map['AgentType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EstimatedProcessingTime'])) {
            $model->estimatedProcessingTime = $map['EstimatedProcessingTime'];
        }

        if (isset($map['EventData'])) {
            $model->eventData = $map['EventData'];
        }

        if (isset($map['HandlerProcessStatus'])) {
            $model->handlerProcessStatus = $map['HandlerProcessStatus'];
        }

        if (isset($map['HandlerType'])) {
            $model->handlerType = $map['HandlerType'];
        }

        return $model;
    }
}
