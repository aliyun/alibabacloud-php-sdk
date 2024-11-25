<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveRecordFilesResponseBody;

use AlibabaCloud\Tea\Model;

class deleteFileInfoList extends Model
{
    /**
     * @description The code that identifies the result of the deletion.
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The result of deletion.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the deleted recording file.
     *
     * @example 13cbb83e-043c-4728-ac35-*****
     *
     * @var string
     */
    public $recordId;
    protected $_name = [
        'code'     => 'Code',
        'message'  => 'Message',
        'recordId' => 'RecordId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
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
     * @return deleteFileInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        return $model;
    }
}
