<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordContentResponseBody\recordContentInfoList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamRecordContentResponseBody extends Model
{
    /**
     * @var recordContentInfoList
     */
    public $recordContentInfoList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordContentInfoList' => 'RecordContentInfoList',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

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
