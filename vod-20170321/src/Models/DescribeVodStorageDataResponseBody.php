<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponseBody\storageData;
use AlibabaCloud\Tea\Model;

class DescribeVodStorageDataResponseBody extends Model
{
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

    /**
     * @description The storage usage data returned.
     *
     * @var storageData
     */
    public $storageData;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'requestId'    => 'RequestId',
        'storageData'  => 'StorageData',
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
        if (null !== $this->storageData) {
            $res['StorageData'] = null !== $this->storageData ? $this->storageData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodStorageDataResponseBody
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
        if (isset($map['StorageData'])) {
            $model->storageData = storageData::fromMap($map['StorageData']);
        }

        return $model;
    }
}
