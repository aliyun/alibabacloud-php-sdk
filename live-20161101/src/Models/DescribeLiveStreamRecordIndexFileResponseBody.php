<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordIndexFileResponseBody\recordIndexInfo;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamRecordIndexFileResponseBody extends Model
{
    /**
     * @description The information about the index file.
     *
     * @var recordIndexInfo
     */
    public $recordIndexInfo;

    /**
     * @description The request ID.
     *
     * @example 5EBF2AC3-4B73-40A5-8B32-83F49D5F035E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordIndexInfo' => 'RecordIndexInfo',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordIndexInfo) {
            $res['RecordIndexInfo'] = null !== $this->recordIndexInfo ? $this->recordIndexInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamRecordIndexFileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordIndexInfo'])) {
            $model->recordIndexInfo = recordIndexInfo::fromMap($map['RecordIndexInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
