<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses\state;

use AlibabaCloud\Tea\Model;

class waiting extends Model
{
    /**
     * @description The message about the event.
     *
     * @example Back-off
     *
     * @var string
     */
    public $message;

    /**
     * @description The cause of the event.
     *
     * @example Started
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'message' => 'Message',
        'reason'  => 'Reason',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return waiting
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

        return $model;
    }
}
