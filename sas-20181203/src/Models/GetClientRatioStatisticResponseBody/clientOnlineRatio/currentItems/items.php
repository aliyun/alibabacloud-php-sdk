<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetClientRatioStatisticResponseBody\clientOnlineRatio\currentItems;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $assetInstallCount;

    /**
     * @var int
     */
    public $calculateTime;

    /**
     * @var int
     */
    public $onlineAssetCount;

    /**
     * @var float
     */
    public $onlineRatio;
    protected $_name = [
        'assetInstallCount' => 'AssetInstallCount',
        'calculateTime' => 'CalculateTime',
        'onlineAssetCount' => 'OnlineAssetCount',
        'onlineRatio' => 'OnlineRatio',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetInstallCount) {
            $res['AssetInstallCount'] = $this->assetInstallCount;
        }

        if (null !== $this->calculateTime) {
            $res['CalculateTime'] = $this->calculateTime;
        }

        if (null !== $this->onlineAssetCount) {
            $res['OnlineAssetCount'] = $this->onlineAssetCount;
        }

        if (null !== $this->onlineRatio) {
            $res['OnlineRatio'] = $this->onlineRatio;
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
        if (isset($map['AssetInstallCount'])) {
            $model->assetInstallCount = $map['AssetInstallCount'];
        }

        if (isset($map['CalculateTime'])) {
            $model->calculateTime = $map['CalculateTime'];
        }

        if (isset($map['OnlineAssetCount'])) {
            $model->onlineAssetCount = $map['OnlineAssetCount'];
        }

        if (isset($map['OnlineRatio'])) {
            $model->onlineRatio = $map['OnlineRatio'];
        }

        return $model;
    }
}
