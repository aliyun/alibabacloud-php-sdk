<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903\Models;

use AlibabaCloud\Dara\Model;

class CreateComponentAssetResponseBody extends Model
{
    /**
     * @var string
     */
    public $componentAssetUuid;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'componentAssetUuid' => 'ComponentAssetUuid',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentAssetUuid) {
            $res['ComponentAssetUuid'] = $this->componentAssetUuid;
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
        if (isset($map['ComponentAssetUuid'])) {
            $model->componentAssetUuid = $map['ComponentAssetUuid'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
