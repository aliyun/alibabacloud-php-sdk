<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordIndexFileResponseBody\recordIndexInfo;

class DescribeLiveStreamRecordIndexFileResponseBody extends Model
{
    /**
     * @var recordIndexInfo
     */
    public $recordIndexInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordIndexInfo' => 'RecordIndexInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->recordIndexInfo) {
            $this->recordIndexInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordIndexInfo) {
            $res['RecordIndexInfo'] = null !== $this->recordIndexInfo ? $this->recordIndexInfo->toArray($noStream) : $this->recordIndexInfo;
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
        if (isset($map['RecordIndexInfo'])) {
            $model->recordIndexInfo = recordIndexInfo::fromMap($map['RecordIndexInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
