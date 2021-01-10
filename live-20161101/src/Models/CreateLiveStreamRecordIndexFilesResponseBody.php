<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveStreamRecordIndexFilesResponseBody\recordInfo;
use AlibabaCloud\Tea\Model;

class CreateLiveStreamRecordIndexFilesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var recordInfo
     */
    public $recordInfo;
    protected $_name = [
        'requestId'  => 'RequestId',
        'recordInfo' => 'RecordInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->recordInfo) {
            $res['RecordInfo'] = null !== $this->recordInfo ? $this->recordInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLiveStreamRecordIndexFilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RecordInfo'])) {
            $model->recordInfo = recordInfo::fromMap($map['RecordInfo']);
        }

        return $model;
    }
}
