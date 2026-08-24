<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kvcachestore\V20260617\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\GetKVCacheStoreResponseBody\kvCacheStore;

class GetKVCacheStoreResponseBody extends Model
{
    /**
     * @var kvCacheStore
     */
    public $kvCacheStore;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'kvCacheStore' => 'KvCacheStore',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->kvCacheStore) {
            $this->kvCacheStore->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kvCacheStore) {
            $res['KvCacheStore'] = null !== $this->kvCacheStore ? $this->kvCacheStore->toArray($noStream) : $this->kvCacheStore;
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
        if (isset($map['KvCacheStore'])) {
            $model->kvCacheStore = kvCacheStore::fromMap($map['KvCacheStore']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
