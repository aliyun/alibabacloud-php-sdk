<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetStorageInfoResponseBody\domainInfoList;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetStorageInfoResponseBody\storage;

class GetStorageInfoResponseBody extends Model
{
    /**
     * @var domainInfoList
     */
    public $domainInfoList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var storage
     */
    public $storage;

    /**
     * @var string
     */
    public $storageACL;
    protected $_name = [
        'domainInfoList' => 'DomainInfoList',
        'requestId' => 'RequestId',
        'storage' => 'Storage',
        'storageACL' => 'StorageACL',
    ];

    public function validate()
    {
        if (null !== $this->domainInfoList) {
            $this->domainInfoList->validate();
        }
        if (null !== $this->storage) {
            $this->storage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainInfoList) {
            $res['DomainInfoList'] = null !== $this->domainInfoList ? $this->domainInfoList->toArray($noStream) : $this->domainInfoList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->storage) {
            $res['Storage'] = null !== $this->storage ? $this->storage->toArray($noStream) : $this->storage;
        }

        if (null !== $this->storageACL) {
            $res['StorageACL'] = $this->storageACL;
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
        if (isset($map['DomainInfoList'])) {
            $model->domainInfoList = domainInfoList::fromMap($map['DomainInfoList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Storage'])) {
            $model->storage = storage::fromMap($map['Storage']);
        }

        if (isset($map['StorageACL'])) {
            $model->storageACL = $map['StorageACL'];
        }

        return $model;
    }
}
