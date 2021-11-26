<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAppEventsResponseBody\data;

use AlibabaCloud\Tea\Model;

class appEventEntity extends Model
{
    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $firstTimestamp;

    /**
     * @var string
     */
    public $lastTimestamp;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $objectKind;

    /**
     * @var string
     */
    public $objectName;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'eventType'      => 'EventType',
        'firstTimestamp' => 'FirstTimestamp',
        'lastTimestamp'  => 'LastTimestamp',
        'message'        => 'Message',
        'objectKind'     => 'ObjectKind',
        'objectName'     => 'ObjectName',
        'reason'         => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->firstTimestamp) {
            $res['FirstTimestamp'] = $this->firstTimestamp;
        }
        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->objectKind) {
            $res['ObjectKind'] = $this->objectKind;
        }
        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appEventEntity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['FirstTimestamp'])) {
            $model->firstTimestamp = $map['FirstTimestamp'];
        }
        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ObjectKind'])) {
            $model->objectKind = $map['ObjectKind'];
        }
        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
