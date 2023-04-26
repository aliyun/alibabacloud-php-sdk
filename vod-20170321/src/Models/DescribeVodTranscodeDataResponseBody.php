<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponseBody\transcodeData;
use AlibabaCloud\Tea\Model;

class DescribeVodTranscodeDataResponseBody extends Model
{
    /**
     * @description The interval at which the data was queried. Valid values:
     *
     *   **hour**
     *   **day**
     *
     * @example day
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The ID of the request.
     *
     * @example C370DAF1-C838-4288-****-9A87633D248E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The transcoding statistics returned.
     *
     * @var transcodeData
     */
    public $transcodeData;
    protected $_name = [
        'dataInterval'  => 'DataInterval',
        'requestId'     => 'RequestId',
        'transcodeData' => 'TranscodeData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->transcodeData) {
            $res['TranscodeData'] = null !== $this->transcodeData ? $this->transcodeData->toMap() : null;
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
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TranscodeData'])) {
            $model->transcodeData = transcodeData::fromMap($map['TranscodeData']);
        }

        return $model;
    }
}
