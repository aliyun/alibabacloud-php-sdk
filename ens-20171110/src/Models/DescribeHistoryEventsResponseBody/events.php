<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeHistoryEventsResponseBody;

use AlibabaCloud\Dara\Model;

class events extends Model
{
    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventLevel;

    /**
     * @var string
     */
    public $eventStatus;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $extendedAttribute;

    /**
     * @var int
     */
    public $notBefore;

    /**
     * @var int
     */
    public $publishTime;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'eventId' => 'EventId',
        'eventLevel' => 'EventLevel',
        'eventStatus' => 'EventStatus',
        'eventType' => 'EventType',
        'extendedAttribute' => 'ExtendedAttribute',
        'notBefore' => 'NotBefore',
        'publishTime' => 'PublishTime',
        'reason' => 'Reason',
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }

        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }

        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        if (null !== $this->extendedAttribute) {
            $res['ExtendedAttribute'] = $this->extendedAttribute;
        }

        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }

        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }

        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }

        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        if (isset($map['ExtendedAttribute'])) {
            $model->extendedAttribute = $map['ExtendedAttribute'];
        }

        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }

        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
