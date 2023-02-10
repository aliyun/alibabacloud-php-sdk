<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceEventResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @example {\"versionId\":1,\"message\":\"Stage scale complete\",\"availableInstance\":1,\"unavailableInstance\":0}
     *
     * @var string
     */
    public $message;

    /**
     * @example Updating
     *
     * @var string
     */
    public $reason;

    /**
     * @example 2022-04-09 06:30:00
     *
     * @var string
     */
    public $time;

    /**
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
