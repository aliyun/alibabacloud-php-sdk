<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class RefreshAssetsRequest extends Model
{
    /**
     * @var string
     */
    public $assetType;
    /**
     * @var int
     */
    public $cloudAssetSubType;
    /**
     * @var int
     */
    public $cloudAssetType;
    /**
     * @var int
     */
    public $vendor;
    protected $_name = [
        'assetType'         => 'AssetType',
        'cloudAssetSubType' => 'CloudAssetSubType',
        'cloudAssetType'    => 'CloudAssetType',
        'vendor'            => 'Vendor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->cloudAssetSubType) {
            $res['CloudAssetSubType'] = $this->cloudAssetSubType;
        }

        if (null !== $this->cloudAssetType) {
            $res['CloudAssetType'] = $this->cloudAssetType;
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
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['CloudAssetSubType'])) {
            $model->cloudAssetSubType = $map['CloudAssetSubType'];
        }

        if (isset($map['CloudAssetType'])) {
            $model->cloudAssetType = $map['CloudAssetType'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
