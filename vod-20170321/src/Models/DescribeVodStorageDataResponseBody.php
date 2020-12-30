<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponseBody\storageData;
use AlibabaCloud\Tea\Model;

class DescribeVodStorageDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var storageData
     */
    public $storageData;
    protected $_name = [
        'requestId'    => 'RequestId',
        'dataInterval' => 'DataInterval',
        'storageData'  => 'StorageData',
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
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['StorageData'])) {
            $model->storageData = storageData::fromMap($map['StorageData']);
        }

        return $model;
    }
}
