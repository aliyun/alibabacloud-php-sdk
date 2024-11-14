<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserAssetCountResponseBody;

use AlibabaCloud\Tea\Model;

class asset extends Model
{
    /**
     * @description The number of active APIs.
     *
     * @example 34
     *
     * @var int
     */
    public $assetActive;

    /**
     * @description The total number of APIs.
     *
     * @example 15
     *
     * @var int
     */
    public $assetCount;

    /**
     * @description The number of deactivated APIs.
     *
     * @example 13
     *
     * @var int
     */
    public $assetOffline;
    protected $_name = [
        'assetActive'  => 'AssetActive',
        'assetCount'   => 'AssetCount',
        'assetOffline' => 'AssetOffline',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetActive) {
            $res['AssetActive'] = $this->assetActive;
        }
        if (null !== $this->assetCount) {
            $res['AssetCount'] = $this->assetCount;
        }
        if (null !== $this->assetOffline) {
            $res['AssetOffline'] = $this->assetOffline;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return asset
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetActive'])) {
            $model->assetActive = $map['AssetActive'];
        }
        if (isset($map['AssetCount'])) {
            $model->assetCount = $map['AssetCount'];
        }
        if (isset($map['AssetOffline'])) {
            $model->assetOffline = $map['AssetOffline'];
        }

        return $model;
    }
}
