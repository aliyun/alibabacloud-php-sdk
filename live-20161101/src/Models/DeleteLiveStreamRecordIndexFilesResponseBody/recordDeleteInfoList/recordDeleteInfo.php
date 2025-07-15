<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamRecordIndexFilesResponseBody\recordDeleteInfoList;

use AlibabaCloud\Tea\Model;

class recordDeleteInfo extends Model
{
    /**
     * @description The processing result of each file indicated by the file ID. Valid values:
     *
     *   **OK**: The file has been deleted.
     *   **AccessDenied**: Access to the file has been denied.
     *   **FileNotFound**: The file fails to be found.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the index file that is used to locate the live stream recording files to be deleted.
     *
     * @example c4d7f0a4-b506-43f9-8de3-07732c3f**
     *
     * @var string
     */
    public $recordId;
    protected $_name = [
        'message' => 'Message',
        'recordId' => 'RecordId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordDeleteInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        return $model;
    }
}
