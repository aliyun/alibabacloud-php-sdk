<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveGrtnDurationResponseBody\streamDetailData;

class DescribeLiveGrtnDurationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var streamDetailData
     */
    public $streamDetailData;
    protected $_name = [
        'requestId' => 'RequestId',
        'streamDetailData' => 'StreamDetailData',
    ];

    public function validate()
    {
        if (null !== $this->streamDetailData) {
            $this->streamDetailData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->streamDetailData) {
            $res['StreamDetailData'] = null !== $this->streamDetailData ? $this->streamDetailData->toArray($noStream) : $this->streamDetailData;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StreamDetailData'])) {
            $model->streamDetailData = streamDetailData::fromMap($map['StreamDetailData']);
        }

        return $model;
    }
}
