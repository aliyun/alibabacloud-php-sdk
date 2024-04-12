<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description The number of the events.
     *
     * @example 20
     *
     * @var int
     */
    public $count;

    /**
     * @description The start time of the event.
     *
     * @example 2018-08-02T15:00:00Z
     *
     * @var string
     */
    public $firstTimestamp;

    /**
     * @description The end time of the event.
     *
     * @example 2018-08-02T15:00:00Z
     *
     * @var string
     */
    public $lastTimestamp;

    /**
     * @description The event message.
     *
     * @example Started container
     *
     * @var string
     */
    public $message;

    /**
     * @description The category to which the event belongs.
     *
     * @example test-xxx
     *
     * @var string
     */
    public $name;

    /**
     * @description The event name.
     *
     * @example Created
     *
     * @var string
     */
    public $reason;

    /**
     * @description The type of the event. Valid values:
     *
     *   Normal
     *   Warning
     *
     * @example Normal
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'count'          => 'Count',
        'firstTimestamp' => 'FirstTimestamp',
        'lastTimestamp'  => 'LastTimestamp',
        'message'        => 'Message',
        'name'           => 'Name',
        'reason'         => 'Reason',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
