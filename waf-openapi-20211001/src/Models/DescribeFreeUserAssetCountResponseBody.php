<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserAssetCountResponseBody\asset;
use AlibabaCloud\Tea\Model;

class DescribeFreeUserAssetCountResponseBody extends Model
{
    /**
     * @description The asset statistics provided by basic detection.
     *
     * @var asset
     */
    public $asset;

    /**
     * @description The request ID.
     *
     * @example 30488BF0-FD58-52DD-B396-D014549F43A3
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
     * @return DescribeFreeUserAssetCountResponseBody
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
