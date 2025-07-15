<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDrmUsageDataResponseBody\drmUsageData;
use AlibabaCloud\Tea\Model;

class DescribeLiveDrmUsageDataResponseBody extends Model
{
    /**
     * @description The usage of the DRM encryption service at each time interval.
     *
     * @var drmUsageData
     */
    public $drmUsageData;

    /**
     * @description The request ID.
     *
     * @example 91FC2D9D-B042-4634-8A5C-7B8E7482C22D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'drmUsageData' => 'DrmUsageData',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->drmUsageData) {
            $res['DrmUsageData'] = null !== $this->drmUsageData ? $this->drmUsageData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDrmUsageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrmUsageData'])) {
            $model->drmUsageData = drmUsageData::fromMap($map['DrmUsageData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
