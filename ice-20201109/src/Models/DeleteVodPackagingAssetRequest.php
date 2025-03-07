<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteVodPackagingAssetRequest extends Model
{
    /**
     * @description The name of the VOD packaging asset.
     *
     * @example 30min_movie
     *
     * @var string
     */
    public $assetName;
    protected $_name = [
        'assetName' => 'AssetName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVodPackagingAssetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetName'])) {
            $model->assetName = $map['AssetName'];
        }

        return $model;
    }
}
