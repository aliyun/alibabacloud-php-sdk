<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetDetailRequest\cloudAssetInstances;

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
        'assetSubType' => 'AssetSubType',
        'assetType' => 'AssetType',
        'cloudAssetInstances' => 'CloudAssetInstances',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
        if (\is_array($this->cloudAssetInstances)) {
            Model::validateArray($this->cloudAssetInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetSubType) {
            $res['AssetSubType'] = $this->assetSubType;
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->cloudAssetInstances) {
            if (\is_array($this->cloudAssetInstances)) {
                $res['CloudAssetInstances'] = [];
                $n1 = 0;
                foreach ($this->cloudAssetInstances as $item1) {
                    $res['CloudAssetInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['AssetSubType'])) {
            $model->assetSubType = $map['AssetSubType'];
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['CloudAssetInstances'])) {
            if (!empty($map['CloudAssetInstances'])) {
                $model->cloudAssetInstances = [];
                $n1 = 0;
                foreach ($map['CloudAssetInstances'] as $item1) {
                    $model->cloudAssetInstances[$n1] = cloudAssetInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
