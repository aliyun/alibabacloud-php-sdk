<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StartDISyncInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The reason why the real-time synchronization node or the data synchronization solution fails to be started.
     *
     * If the real-time synchronization node or the data synchronization solution is started, the value null is returned.
     * @example fileId:[100] is invalid.
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the real-time synchronization node or the data synchronization solution is started. Valid values:
     *
     *   success: The real-time synchronization node or the data synchronization solution is started.
     *   fail: The real-time synchronization node or the data synchronization solution fails to be started. You can troubleshoot the issue based on the provided cause.
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'message' => 'Message',
        'status'  => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
