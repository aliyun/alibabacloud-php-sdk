<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetClientRatioStatisticResponseBody\clientInstallRatio\currentItems;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $assetTotalCount;

    /**
     * @var int
     */
    public $calculateTime;

    /**
     * @var float
     */
    public $installRatio;

    /**
     * @var int
     */
    public $installedAssetCount;
    protected $_name = [
        'assetTotalCount' => 'AssetTotalCount',
        'calculateTime' => 'CalculateTime',
        'installRatio' => 'InstallRatio',
        'installedAssetCount' => 'InstalledAssetCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
