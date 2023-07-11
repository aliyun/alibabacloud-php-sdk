<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetClientRatioStatisticResponseBody\clientInstallRatio\historyItems;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $assetTotalCount;

    /**
     * @example 1687759630045
     *
     * @var int
     */
    public $calculateTime;

    /**
     * @example 80.00
     *
     * @var float
     */
    public $installRatio;

    /**
     * @example 80
     *
     * @var int
     */
    public $installedAssetCount;
    protected $_name = [
        'assetTotalCount'     => 'AssetTotalCount',
        'calculateTime'       => 'CalculateTime',
        'installRatio'        => 'InstallRatio',
        'installedAssetCount' => 'InstalledAssetCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetTotalCount) {
            $res['AssetTotalCount'] = $this->assetTotalCount;
        }
        if (null !== $this->calculateTime) {
            $res['CalculateTime'] = $this->calculateTime;
        }
        if (null !== $this->installRatio) {
            $res['InstallRatio'] = $this->installRatio;
        }
        if (null !== $this->installedAssetCount) {
            $res['InstalledAssetCount'] = $this->installedAssetCount;
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
        if (isset($map['AssetTotalCount'])) {
            $model->assetTotalCount = $map['AssetTotalCount'];
        }
        if (isset($map['CalculateTime'])) {
            $model->calculateTime = $map['CalculateTime'];
        }
        if (isset($map['InstallRatio'])) {
            $model->installRatio = $map['InstallRatio'];
        }
        if (isset($map['InstalledAssetCount'])) {
            $model->installedAssetCount = $map['InstalledAssetCount'];
        }

        return $model;
    }
}
