<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponseBody\transcodeData;
use AlibabaCloud\Tea\Model;

class DescribeVodTranscodeDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var transcodeData
     */
    public $transcodeData;

    /**
     * @var string
     */
    public $dataInterval;
    protected $_name = [
        'requestId'     => 'RequestId',
        'transcodeData' => 'TranscodeData',
        'dataInterval'  => 'DataInterval',
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
        if (null !== $this->transcodeData) {
            $res['TranscodeData'] = null !== $this->transcodeData ? $this->transcodeData->toMap() : null;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodTranscodeDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TranscodeData'])) {
            $model->transcodeData = transcodeData::fromMap($map['TranscodeData']);
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }

        return $model;
    }
}
