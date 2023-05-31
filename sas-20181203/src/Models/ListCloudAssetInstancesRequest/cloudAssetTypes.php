<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCloudAssetInstancesRequest;

use AlibabaCloud\Tea\Model;

class cloudAssetTypes extends Model
{
    /**
     * @description The subtype of the cloud asset.
     *
     * You can call the [GetCloudAssetCriteria](~~GetCloudAssetCriteria~~) operation to query the subtypes of cloud assets from the AssetSubType response parameter.
     * @example 0
     *
     * @var int
     */
    public $assetSubType;

    /**
     * @description The type of the cloud asset.
     *
     * You can call the [GetCloudAssetCriteria](~~GetCloudAssetCriteria~~) operation to query the types of cloud assets from the AssetType response parameter.
     * @example 18
     *
     * @var int
     */
    public $assetType;
    protected $_name = [
        'assetSubType' => 'AssetSubType',
        'assetType'    => 'AssetType',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudAssetTypes
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

        return $model;
    }
}
