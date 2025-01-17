<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeAssetRefreshTaskConfigRequest\assetRefreshConfigs;

class ChangeAssetRefreshTaskConfigRequest extends Model
{
    /**
     * @var assetRefreshConfigs[]
     */
    public $assetRefreshConfigs;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'assetRefreshConfigs' => 'AssetRefreshConfigs',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->assetRefreshConfigs)) {
            Model::validateArray($this->assetRefreshConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetRefreshConfigs) {
            if (\is_array($this->assetRefreshConfigs)) {
                $res['AssetRefreshConfigs'] = [];
                $n1                         = 0;
                foreach ($this->assetRefreshConfigs as $item1) {
                    $res['AssetRefreshConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AssetRefreshConfigs'])) {
            if (!empty($map['AssetRefreshConfigs'])) {
                $model->assetRefreshConfigs = [];
                $n1                         = 0;
                foreach ($map['AssetRefreshConfigs'] as $item1) {
                    $model->assetRefreshConfigs[$n1++] = assetRefreshConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
