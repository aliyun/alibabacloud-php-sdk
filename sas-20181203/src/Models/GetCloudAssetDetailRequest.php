<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetDetailRequest\cloudAssetInstances;
use AlibabaCloud\Tea\Model;

class GetCloudAssetDetailRequest extends Model
{
    /**
     * @var int
     */
    public $assetSubType;

    /**
     * @var int
     */
    public $assetType;

    /**
     * @var cloudAssetInstances[]
     */
    public $cloudAssetInstances;

    /**
     * @var int
     */
    public $vendor;
    protected $_name = [
        'assetSubType'        => 'AssetSubType',
        'assetType'           => 'AssetType',
        'cloudAssetInstances' => 'CloudAssetInstances',
        'vendor'              => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetSubType) {
            $res['AssetSubType'] = $this->assetSubType;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->cloudAssetInstances) {
            $res['CloudAssetInstances'] = [];
            if (null !== $this->cloudAssetInstances && \is_array($this->cloudAssetInstances)) {
                $n = 0;
                foreach ($this->cloudAssetInstances as $item) {
                    $res['CloudAssetInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCloudAssetDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetSubType'])) {
            $model->assetSubType = $map['AssetSubType'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['CloudAssetInstances'])) {
            if (!empty($map['CloudAssetInstances'])) {
                $model->cloudAssetInstances = [];
                $n                          = 0;
                foreach ($map['CloudAssetInstances'] as $item) {
                    $model->cloudAssetInstances[$n++] = null !== $item ? cloudAssetInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
