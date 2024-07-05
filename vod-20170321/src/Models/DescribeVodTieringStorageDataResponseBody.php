<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTieringStorageDataResponseBody\storageData;
use AlibabaCloud\Tea\Model;

class DescribeVodTieringStorageDataResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4AF6-D7393642CA58****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The storage usage data returned.
     *
     * @var storageData[]
     */
    public $storageData;
    protected $_name = [
        'requestId'   => 'RequestId',
        'storageData' => 'StorageData',
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
        if (null !== $this->storageData) {
            $res['StorageData'] = [];
            if (null !== $this->storageData && \is_array($this->storageData)) {
                $n = 0;
                foreach ($this->storageData as $item) {
                    $res['StorageData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodTieringStorageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StorageData'])) {
            if (!empty($map['StorageData'])) {
                $model->storageData = [];
                $n                  = 0;
                foreach ($map['StorageData'] as $item) {
                    $model->storageData[$n++] = null !== $item ? storageData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
