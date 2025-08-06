<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetPersonalStorageListResponseBody\storageInfoList;

class GetPersonalStorageListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var storageInfoList
     */
    public $storageInfoList;
    protected $_name = [
        'requestId' => 'RequestId',
        'storageInfoList' => 'StorageInfoList',
    ];

    public function validate()
    {
        if (null !== $this->storageInfoList) {
            $this->storageInfoList->validate();
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
            $res['StorageInfoList'] = null !== $this->storageInfoList ? $this->storageInfoList->toArray($noStream) : $this->storageInfoList;
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
            $model->storageInfoList = storageInfoList::fromMap($map['StorageInfoList']);
        }

        return $model;
    }
}
