<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponseBody\storageData;

class DescribeVodStorageDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var storageData
     */
    public $storageData;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'requestId' => 'RequestId',
        'storageData' => 'StorageData',
    ];

    public function validate()
    {
        if (null !== $this->storageData) {
            $this->storageData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->storageData) {
            $res['StorageData'] = null !== $this->storageData ? $this->storageData->toArray($noStream) : $this->storageData;
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
