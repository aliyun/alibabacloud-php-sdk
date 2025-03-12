<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAssetCleanConfigRequest\assetCleanConfigs;
use AlibabaCloud\Tea\Model;

class ModifyAssetCleanConfigRequest extends Model
{
    /**
     * @description The asset cleanup configurations.
     *
     * @var assetCleanConfigs[]
     */
    public $assetCleanConfigs;
    protected $_name = [
        'assetCleanConfigs' => 'AssetCleanConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetCleanConfigs) {
            $res['AssetCleanConfigs'] = [];
            if (null !== $this->assetCleanConfigs && \is_array($this->assetCleanConfigs)) {
                $n = 0;
                foreach ($this->assetCleanConfigs as $item) {
                    $res['AssetCleanConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAssetCleanConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetCleanConfigs'])) {
            if (!empty($map['AssetCleanConfigs'])) {
                $model->assetCleanConfigs = [];
                $n                        = 0;
                foreach ($map['AssetCleanConfigs'] as $item) {
                    $model->assetCleanConfigs[$n++] = null !== $item ? assetCleanConfigs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
