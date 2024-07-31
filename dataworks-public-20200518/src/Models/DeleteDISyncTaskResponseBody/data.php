<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDISyncTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The reason why the synchronization task fails to be deleted. If the synchronization task is deleted, the value null is returned for this parameter.
     *
     * @example fileId:[100] is invalid.
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the synchronization task is deleted. Valid values:
     *
     *   success: The synchronization task is deleted.
     *   fail: The synchronization task fails to be deleted. You can troubleshoot the issue based on the failure reason.
     *
     * @example fail
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
