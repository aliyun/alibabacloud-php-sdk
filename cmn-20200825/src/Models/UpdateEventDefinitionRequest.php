<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class UpdateEventDefinitionRequest extends Model
{
    /**
     * @example e-1dcscicdv
     *
     * @var string
     */
    public $eventId;

    /**
     * @example 探针掉线事件
     *
     * @var string
     */
    public $eventName;

    /**
     * @example AGENT_EVENT
     *
     * @var string
     */
    public $eventType;

    /**
     * @example cmn-cn-xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'eventId'    => 'EventId',
        'eventName'  => 'EventName',
        'eventType'  => 'EventType',
        'instanceId' => 'InstanceId',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEventDefinitionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
