<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListAITaskEventsResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @example GenerateTemplateAgent
     *
     * @var string
     */
    public $agentType;

    /**
     * @example 2019-08-01T04:07:39
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 60
     *
     * @var string
     */
    public $estimatedProcessingTime;

    /**
     * @example Document template generator started.
     *
     * @var string
     */
    public $eventData;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $handlerProcessStatus;

    /**
     * @example ROSTemplateGenerator
     *
     * @var string
     */
    public $handlerType;
    protected $_name = [
        'agentType'               => 'AgentType',
        'createTime'              => 'CreateTime',
        'estimatedProcessingTime' => 'EstimatedProcessingTime',
        'eventData'               => 'EventData',
        'handlerProcessStatus'    => 'HandlerProcessStatus',
        'handlerType'             => 'HandlerType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return events
     */
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
