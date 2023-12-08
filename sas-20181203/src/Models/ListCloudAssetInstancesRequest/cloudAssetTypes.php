<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCloudAssetInstancesRequest;

use AlibabaCloud\Tea\Model;

class cloudAssetTypes extends Model
{
    /**
     * @description The subtype of the cloud asset.
     *
     * You can call the [GetCloudAssetCriteria](~~GetCloudAssetCriteria~~) operation to query the subtype of the cloud asset.
     * @example 0
     *
     * @var int
     */
    public $assetSubType;

    /**
     * @description The type of the cloud asset.
     *
     * You can call the [GetCloudAssetCriteria](~~GetCloudAssetCriteria~~) operation to query the cloud asset type.
     * @example 18
     *
     * @var int
     */
    public $assetType;

    /**
     * @description The server type. Valid values:
     *
     *   **0**: a cloud asset provided by Alibaba Cloud
     *   **1**: a cloud asset outside Alibaba Cloud
     *   **2**: a cloud asset in a data center
     *   **3**, **4**, **5**, and **7**: a cloud asset provided by a third-party service provider
     *   **8**: a lightweight cloud asset
     *
     * @example 0
     *
     * @var int
     */
    public $vendor;
    protected $_name = [
        'assetSubType' => 'AssetSubType',
        'assetType'    => 'AssetType',
        'vendor'       => 'Vendor',
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
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
