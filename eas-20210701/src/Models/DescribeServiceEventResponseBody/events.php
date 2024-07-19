<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceEventResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description The returned message. The message is formatted and returned in the JSON format.
     *
     * @example {\\"versionId\\":1,\\"message\\":\\"Stage scale complete\\",\\"availableInstance\\":1,\\"unavailableInstance\\":0}
     *
     * @var string
     */
    public $message;

    /**
     * @description The cause of the event. The information about the change in the service status is returned.
     *
     * @example Updating
     *
     * @var string
     */
    public $reason;

    /**
     * @description The time when the event occurred. The time must be in UTC.
     *
     * @example 2022-04-09 06:30:00
     *
     * @var string
     */
    public $time;

    /**
     * @description The event type. Valid values:
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
        'message' => 'Message',
        'reason'  => 'Reason',
        'time'    => 'Time',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
