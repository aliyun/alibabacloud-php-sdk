<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetStorageListResponseBody\storageInfoList;
use AlibabaCloud\Tea\Model;

class GetStorageListResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example ******73-8B78-5D86-A50C-49B96C******
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->storageInfoList) {
            $res['StorageInfoList'] = [];
            if (null !== $this->storageInfoList && \is_array($this->storageInfoList)) {
                $n = 0;
                foreach ($this->storageInfoList as $item) {
                    $res['StorageInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStorageListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StorageInfoList'])) {
            if (!empty($map['StorageInfoList'])) {
                $model->storageInfoList = [];
                $n                      = 0;
                foreach ($map['StorageInfoList'] as $item) {
                    $model->storageInfoList[$n++] = null !== $item ? storageInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
