<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeAssetRefreshTaskConfigRequest\assetRefreshConfigs;
use AlibabaCloud\Tea\Model;

class ChangeAssetRefreshTaskConfigRequest extends Model
{
    /**
     * @var assetRefreshConfigs[]
     */
    public $assetRefreshConfigs;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'assetRefreshConfigs' => 'AssetRefreshConfigs',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetRefreshConfigs) {
            $res['AssetRefreshConfigs'] = [];
            if (null !== $this->assetRefreshConfigs && \is_array($this->assetRefreshConfigs)) {
                $n = 0;
                foreach ($this->assetRefreshConfigs as $item) {
                    $res['AssetRefreshConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeAssetRefreshTaskConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetRefreshConfigs'])) {
            if (!empty($map['AssetRefreshConfigs'])) {
                $model->assetRefreshConfigs = [];
                $n                          = 0;
                foreach ($map['AssetRefreshConfigs'] as $item) {
                    $model->assetRefreshConfigs[$n++] = null !== $item ? assetRefreshConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
