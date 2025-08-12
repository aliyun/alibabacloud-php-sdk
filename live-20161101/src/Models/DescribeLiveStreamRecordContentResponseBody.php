<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordContentResponseBody\recordContentInfoList;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->recordContentInfoList) {
            $this->recordContentInfoList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordContentInfoList) {
            $res['RecordContentInfoList'] = null !== $this->recordContentInfoList ? $this->recordContentInfoList->toArray($noStream) : $this->recordContentInfoList;
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
        if (isset($map['RecordContentInfoList'])) {
            $model->recordContentInfoList = recordContentInfoList::fromMap($map['RecordContentInfoList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
