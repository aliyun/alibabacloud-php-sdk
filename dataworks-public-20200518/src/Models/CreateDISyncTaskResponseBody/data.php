<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDISyncTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the created synchronization node.
     *
     * @example 1000001
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The reason why the synchronization node failed to be created.
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the synchronization node was created. Valid values:
     *
     *   success: The synchronization node was created.
     *   fail: The synchronization node failed to be created.
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'fileId'  => 'FileId',
        'message' => 'Message',
        'status'  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
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
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
