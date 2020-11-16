<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordContentResponse\recordContentInfoList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamRecordContentResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var recordContentInfoList
     */
    public $recordContentInfoList;
    protected $_name = [
        'requestId'             => 'RequestId',
        'recordContentInfoList' => 'RecordContentInfoList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('recordContentInfoList', $this->recordContentInfoList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->recordContentInfoList) {
            $res['RecordContentInfoList'] = null !== $this->recordContentInfoList ? $this->recordContentInfoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamRecordContentResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RecordContentInfoList'])) {
            $model->recordContentInfoList = recordContentInfoList::fromMap($map['RecordContentInfoList']);
        }

        return $model;
    }
}
