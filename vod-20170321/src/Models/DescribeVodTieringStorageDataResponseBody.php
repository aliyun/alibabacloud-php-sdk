<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTieringStorageDataResponseBody\storageData;

class DescribeVodTieringStorageDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var storageData[]
     */
    public $storageData;
    protected $_name = [
        'requestId' => 'RequestId',
        'storageData' => 'StorageData',
    ];

    public function validate()
    {
        if (\is_array($this->storageData)) {
            Model::validateArray($this->storageData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->storageData) {
            if (\is_array($this->storageData)) {
                $res['StorageData'] = [];
                $n1 = 0;
                foreach ($this->storageData as $item1) {
                    $res['StorageData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StorageData'])) {
            if (!empty($map['StorageData'])) {
                $model->storageData = [];
                $n1 = 0;
                foreach ($map['StorageData'] as $item1) {
                    $model->storageData[$n1++] = storageData::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
