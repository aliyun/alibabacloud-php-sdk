<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetStorageListResponseBody\storageInfoList;

class GetStorageListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var storageInfoList[]
     */
    public $storageInfoList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'storageInfoList' => 'StorageInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->storageInfoList)) {
            Model::validateArray($this->storageInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->storageInfoList) {
            if (\is_array($this->storageInfoList)) {
                $res['StorageInfoList'] = [];
                $n1                     = 0;
                foreach ($this->storageInfoList as $item1) {
                    $res['StorageInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['StorageInfoList'])) {
            if (!empty($map['StorageInfoList'])) {
                $model->storageInfoList = [];
                $n1                     = 0;
                foreach ($map['StorageInfoList'] as $item1) {
                    $model->storageInfoList[$n1++] = storageInfoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
