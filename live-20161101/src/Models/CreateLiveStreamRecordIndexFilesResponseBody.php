<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveStreamRecordIndexFilesResponseBody\recordInfo;
use AlibabaCloud\Tea\Model;

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
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordInfo) {
            $res['RecordInfo'] = null !== $this->recordInfo ? $this->recordInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RecordInfo'])) {
            $model->recordInfo = recordInfo::fromMap($map['RecordInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
