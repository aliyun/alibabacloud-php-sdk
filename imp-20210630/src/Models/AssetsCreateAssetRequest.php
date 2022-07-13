<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class AssetsCreateAssetRequest extends Model
{
    /**
     * @description Asset请求Item
     *
     * @var CommonSimpleAsset
     */
    public $asset;
    protected $_name = [
        'asset' => 'Asset',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssetsCreateAssetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Asset'])) {
            $model->asset = CommonSimpleAsset::fromMap($map['Asset']);
        }

        return $model;
    }
}
