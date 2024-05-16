<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GenerateDISyncTaskConfigForUpdatingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example XXX is invalid.
     *
     * @var string
     */
    public $message;

    /**
     * @description The reason why the ID of the asynchronous thread fails to be generated. If the ID is successfully generated, the value null is returned.
     *
     * @example 10
     *
     * @var int
     */
    public $processId;

    /**
     * @description The ID of the asynchronous thread. You can call the [QueryDISyncTaskConfigProcessResult](https://help.aliyun.com/document_detail/383465.html) operation to obtain the asynchronously generated parameters based on the ID. The parameters are used to update a real-time synchronization node or a synchronization solution in Data Integration.
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
