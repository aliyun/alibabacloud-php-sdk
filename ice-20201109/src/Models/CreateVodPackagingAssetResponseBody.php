<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateVodPackagingAssetResponseBody extends Model
{
    /**
     * @description The information about the asset.
     *
     * @var VodPackagingAsset
     */
    public $asset;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4A13-BEF6-D7393642CA58
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'asset' => 'Asset',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->asset) {
            $res['Asset'] = null !== $this->asset ? $this->asset->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVodPackagingAssetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Asset'])) {
            $model->asset = VodPackagingAsset::fromMap($map['Asset']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
