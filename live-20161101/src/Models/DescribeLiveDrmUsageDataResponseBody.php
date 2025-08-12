<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDrmUsageDataResponseBody\drmUsageData;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->drmUsageData) {
            $this->drmUsageData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->drmUsageData) {
            $res['DrmUsageData'] = null !== $this->drmUsageData ? $this->drmUsageData->toArray($noStream) : $this->drmUsageData;
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
        if (isset($map['DrmUsageData'])) {
            $model->drmUsageData = drmUsageData::fromMap($map['DrmUsageData']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
