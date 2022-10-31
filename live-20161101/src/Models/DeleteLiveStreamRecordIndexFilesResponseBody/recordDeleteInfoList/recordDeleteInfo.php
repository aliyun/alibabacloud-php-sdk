<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamRecordIndexFilesResponseBody\recordDeleteInfoList;

use AlibabaCloud\Tea\Model;

class recordDeleteInfo extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $recordId;
    protected $_name = [
        'message'  => 'Message',
        'recordId' => 'RecordId',
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
