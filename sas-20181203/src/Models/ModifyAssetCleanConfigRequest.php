<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAssetCleanConfigRequest\assetCleanConfigs;

class ModifyAssetCleanConfigRequest extends Model
{
    /**
     * @var assetCleanConfigs[]
     */
    public $assetCleanConfigs;
    protected $_name = [
        'assetCleanConfigs' => 'AssetCleanConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->assetCleanConfigs)) {
            Model::validateArray($this->assetCleanConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetCleanConfigs) {
            if (\is_array($this->assetCleanConfigs)) {
                $res['AssetCleanConfigs'] = [];
                $n1                       = 0;
                foreach ($this->assetCleanConfigs as $item1) {
                    $res['AssetCleanConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AssetCleanConfigs'])) {
            if (!empty($map['AssetCleanConfigs'])) {
                $model->assetCleanConfigs = [];
                $n1                       = 0;
                foreach ($map['AssetCleanConfigs'] as $item1) {
                    $model->assetCleanConfigs[$n1++] = assetCleanConfigs::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
