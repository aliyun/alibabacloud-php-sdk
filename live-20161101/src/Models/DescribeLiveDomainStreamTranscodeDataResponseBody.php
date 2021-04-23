<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainStreamTranscodeDataResponseBody\transcodeDataList;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainStreamTranscodeDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var transcodeDataList
     */
    public $transcodeDataList;
    protected $_name = [
        'requestId'         => 'RequestId',
        'transcodeDataList' => 'TranscodeDataList',
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
        if (null !== $this->transcodeDataList) {
            $res['TranscodeDataList'] = null !== $this->transcodeDataList ? $this->transcodeDataList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainStreamTranscodeDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TranscodeDataList'])) {
            $model->transcodeDataList = transcodeDataList::fromMap($map['TranscodeDataList']);
        }

        return $model;
    }
}
