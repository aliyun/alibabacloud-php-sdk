<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamRecordIndexFilesResponseBody\recordDeleteInfoList;

class DeleteLiveStreamRecordIndexFilesResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var recordDeleteInfoList
     */
    public $recordDeleteInfoList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'recordDeleteInfoList' => 'RecordDeleteInfoList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->recordDeleteInfoList) {
            $this->recordDeleteInfoList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->recordDeleteInfoList) {
            $res['RecordDeleteInfoList'] = null !== $this->recordDeleteInfoList ? $this->recordDeleteInfoList->toArray($noStream) : $this->recordDeleteInfoList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RecordDeleteInfoList'])) {
            $model->recordDeleteInfoList = recordDeleteInfoList::fromMap($map['RecordDeleteInfoList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
