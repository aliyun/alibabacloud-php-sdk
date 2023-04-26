<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodAIDataResponseBody\AIData;
use AlibabaCloud\Tea\Model;

class DescribeVodAIDataResponseBody extends Model
{
    /**
     * @description The statistics on video AI.
     *
     * @var AIData
     */
    public $AIData;

    /**
     * @description The time granularity at which the data was queried. Valid values:
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
    protected $_name = [
        'AIData'       => 'AIData',
        'dataInterval' => 'DataInterval',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIData) {
            $res['AIData'] = null !== $this->AIData ? $this->AIData->toMap() : null;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodAIDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIData'])) {
            $model->AIData = AIData::fromMap($map['AIData']);
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
