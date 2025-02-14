<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetVodPackagingAssetResponseBody\asset;

class GetVodPackagingAssetResponseBody extends Model
{
    /**
     * @var asset
     */
    public $asset;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'asset'     => 'Asset',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->asset) {
            $this->asset->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asset) {
            $res['Asset'] = null !== $this->asset ? $this->asset->toArray($noStream) : $this->asset;
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
        if (isset($map['Asset'])) {
            $model->asset = asset::fromMap($map['Asset']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
