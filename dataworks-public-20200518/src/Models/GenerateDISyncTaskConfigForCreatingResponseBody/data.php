<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GenerateDISyncTaskConfigForCreatingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The reason why the ID of the asynchronous thread fails to be generated.
     *
     * If the ID is successfully generated, the value null is returned.
     * @example XXX is invalid.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the asynchronous thread. You can call the [QueryDISyncTaskConfigProcessResult](~~383465~~) operation to obtain the asynchronously generated parameters based on the ID. The parameters are used to create a real-time synchronization node or a synchronization solution in Data Integration.
     *
     * @example 10
     *
     * @var int
     */
    public $processId;

    /**
     * @description Indicates whether the ID of the asynchronous thread is generated. Valid values:
     *
     *   success: indicates that the ID of the asynchronous thread is generated.
     *   fail: indicates that the ID of the asynchronous thread fails to be generated. You can view the reason for the failure and troubleshoot the issue based on the reason.
     *
     * @example true
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'message'   => 'Message',
        'processId' => 'ProcessId',
        'status'    => 'Status',
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
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
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
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
