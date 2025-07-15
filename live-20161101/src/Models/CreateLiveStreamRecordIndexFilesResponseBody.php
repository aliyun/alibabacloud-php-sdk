<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\CreateLiveStreamRecordIndexFilesResponseBody\recordInfo;
use AlibabaCloud\Tea\Model;

class CreateLiveStreamRecordIndexFilesResponseBody extends Model
{
    /**
     * @description The recording configuration.
     *
     * @var recordInfo
     */
    public $recordInfo;

    /**
     * @description The ID of the request.
     *
     * @example 550439A3-F8EC-4CA2-BB62-B9DB43EEEF30
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordInfo' => 'RecordInfo',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
