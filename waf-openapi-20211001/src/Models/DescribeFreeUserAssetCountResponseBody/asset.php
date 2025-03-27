<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserAssetCountResponseBody;

use AlibabaCloud\Dara\Model;

class asset extends Model
{
    /**
     * @var int
     */
    public $assetActive;

    /**
     * @var int
     */
    public $assetCount;

    /**
     * @var int
     */
    public $assetOffline;
    protected $_name = [
        'assetActive' => 'AssetActive',
        'assetCount' => 'AssetCount',
        'assetOffline' => 'AssetOffline',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
