<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetClientRatioStatisticResponseBody\clientOnlineRatio\historyItems;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 50
     *
     * @var int
     */
    public $assetInstallCount;

    /**
     * @example 1687759630045
     *
     * @var int
     */
    public $calculateTime;

    /**
     * @example 20
     *
     * @var int
     */
    public $onlineAssetCount;

    /**
     * @example 40.00
     *
     * @var float
     */
    public $onlineRatio;
    protected $_name = [
        'assetInstallCount' => 'AssetInstallCount',
        'calculateTime'     => 'CalculateTime',
        'onlineAssetCount'  => 'OnlineAssetCount',
        'onlineRatio'       => 'OnlineRatio',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return items
     */
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
