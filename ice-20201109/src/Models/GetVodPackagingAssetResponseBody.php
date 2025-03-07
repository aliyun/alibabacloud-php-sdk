<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetVodPackagingAssetResponseBody\asset;
use AlibabaCloud\Tea\Model;

class GetVodPackagingAssetResponseBody extends Model
{
    /**
     * @description The information about the asset.
     *
     * @var asset
     */
    public $asset;

    /**
     * @description The ID of the request.
     *
     * @example 0622C702-41BE-467E-AF2E-883D4517962E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'asset'     => 'Asset',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

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
     * @return GetVodPackagingAssetResponseBody
     */
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
