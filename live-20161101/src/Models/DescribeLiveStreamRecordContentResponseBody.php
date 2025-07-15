<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordContentResponseBody\recordContentInfoList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamRecordContentResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @var recordContentInfoList
     */
    public $recordContentInfoList;

    /**
     * @description The end of the time range to query. The time range that is specified by the StartTime and EndTime parameters cannot exceed 4 days. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 62136AE6-7793-45ED-B14A-60D19A9486D3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordContentInfoList' => 'RecordContentInfoList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordContentInfoList) {
            $res['RecordContentInfoList'] = null !== $this->recordContentInfoList ? $this->recordContentInfoList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamRecordContentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordContentInfoList'])) {
            $model->recordContentInfoList = recordContentInfoList::fromMap($map['RecordContentInfoList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
