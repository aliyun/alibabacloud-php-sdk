<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCloudAssetSchemasResponseBody;

use AlibabaCloud\Dara\Model;

class cloudAssetSchemas extends Model
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
     * @var string
     */
    public $dataName;

    /**
     * @var string
     */
    public $properties;

    /**
     * @var int
     */
    public $vendor;
    protected $_name = [
        'assetSubType' => 'AssetSubType',
        'assetType' => 'AssetType',
        'dataName' => 'DataName',
        'properties' => 'Properties',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
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

        if (null !== $this->dataName) {
            $res['DataName'] = $this->dataName;
        }

        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
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

        if (isset($map['DataName'])) {
            $model->dataName = $map['DataName'];
        }

        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
