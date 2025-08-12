<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveStreamRecordIndexFilesResponseBody\recordInfo;

class CreateLiveStreamRecordIndexFilesResponseBody extends Model
{
    /**
     * @var recordInfo
     */
    public $recordInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordInfo' => 'RecordInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->recordInfo) {
            $this->recordInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordInfo) {
            $res['RecordInfo'] = null !== $this->recordInfo ? $this->recordInfo->toArray($noStream) : $this->recordInfo;
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
        if (isset($map['RecordInfo'])) {
            $model->recordInfo = recordInfo::fromMap($map['RecordInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
