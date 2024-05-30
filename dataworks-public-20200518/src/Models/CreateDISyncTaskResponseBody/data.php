<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDISyncTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the data synchronization task that is created.
     *
     * @example 1000001
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The error message that is returned if the data synchronization task fails to be created. If the data synchronization task is successfully created, this parameter is not returned. If the data synchronization task fails to be created, an error message in the "Invalid path: Business Flow/xxxx/Data Integration" format is returned.
     *
     * @example Invalid path: Business Flow/xxxx/Data Integration
     *
     * @var string
     */
    public $message;

    /**
     * @description The creation status of the data synchronization task. Valid values:
     * - fail
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
