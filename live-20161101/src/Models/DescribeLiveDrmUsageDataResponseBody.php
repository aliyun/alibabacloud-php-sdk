<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDrmUsageDataResponseBody\drmUsageData;
use AlibabaCloud\Tea\Model;

class DescribeLiveDrmUsageDataResponseBody extends Model
{
    /**
     * @var drmUsageData
     */
    public $drmUsageData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'drmUsageData' => 'DrmUsageData',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

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
