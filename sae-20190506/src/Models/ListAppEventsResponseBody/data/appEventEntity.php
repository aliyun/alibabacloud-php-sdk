<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAppEventsResponseBody\data;

use AlibabaCloud\Tea\Model;

class appEventEntity extends Model
{
    /**
     * @description The type of the event. Valid values:
     *
     * @example Normal
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The timestamp of the first occurrence of the event.
     *
     * @example 2020-02-19T05:01:28Z
     *
     * @var string
     */
    public $firstTimestamp;

    /**
     * @description The timestamp of the last occurrence of the event.
     *
     * @example 2020-02-19T05:01:28Z
     *
     * @var string
     */
    public $lastTimestamp;

    /**
     * @description The information about the event.
     *
     * @example Created container
     *
     * @var string
     */
    public $message;

    /**
     * @description The type of the object.
     *
     * @example Pod
     *
     * @var string
     */
    public $objectKind;

    /**
     * @description The name of the object.
     *
     * @example errew-b86bf540-b4dc-47d8-a42f-b4997c14bd8f-5595cbddd6-2****
     *
     * @var string
     */
    public $objectName;

    /**
     * @description The cause of the event.
     *
     * @example Created
     *
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
