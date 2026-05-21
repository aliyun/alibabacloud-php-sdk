<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class Event extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $function;

    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $triggerTenantId;

    /**
     * @var string
     */
    public $triggerTime;

    /**
     * @var string
     */
    public $triggerUserId;

    /**
     * @var string
     */
    public $triggeredBy;
    protected $_name = [
        'content' => 'Content',
        'eventId' => 'EventId',
        'eventType' => 'EventType',
        'function' => 'Function',
        'isTruncated' => 'IsTruncated',
        'objectId' => 'ObjectId',
        'objectType' => 'ObjectType',
        'triggerTenantId' => 'TriggerTenantId',
        'triggerTime' => 'TriggerTime',
        'triggerUserId' => 'TriggerUserId',
        'triggeredBy' => 'TriggeredBy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        if (null !== $this->function) {
            $res['Function'] = $this->function;
        }

        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }

        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->triggerTenantId) {
            $res['TriggerTenantId'] = $this->triggerTenantId;
        }

        if (null !== $this->triggerTime) {
            $res['TriggerTime'] = $this->triggerTime;
        }

        if (null !== $this->triggerUserId) {
            $res['TriggerUserId'] = $this->triggerUserId;
        }

        if (null !== $this->triggeredBy) {
            $res['TriggeredBy'] = $this->triggeredBy;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        if (isset($map['Function'])) {
            $model->function = $map['Function'];
        }

        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }

        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['TriggerTenantId'])) {
            $model->triggerTenantId = $map['TriggerTenantId'];
        }

        if (isset($map['TriggerTime'])) {
            $model->triggerTime = $map['TriggerTime'];
        }

        if (isset($map['TriggerUserId'])) {
            $model->triggerUserId = $map['TriggerUserId'];
        }

        if (isset($map['TriggeredBy'])) {
            $model->triggeredBy = $map['TriggeredBy'];
        }

        return $model;
    }
}
