<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetSummaryResponseBody\groupedFields;

use AlibabaCloud\Dara\Model;

class cloudAssetSummaryMetas extends Model
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
     * @var int
     */
    public $instanceCount;
    /**
     * @var int
     */
    public $instanceRiskCount;
    /**
     * @var int
     */
    public $vendor;
    protected $_name = [
        'assetSubType'      => 'AssetSubType',
        'assetType'         => 'AssetType',
        'instanceCount'     => 'InstanceCount',
        'instanceRiskCount' => 'InstanceRiskCount',
        'vendor'            => 'Vendor',
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

        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }

        if (null !== $this->instanceRiskCount) {
            $res['InstanceRiskCount'] = $this->instanceRiskCount;
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

        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }

        if (isset($map['InstanceRiskCount'])) {
            $model->instanceRiskCount = $map['InstanceRiskCount'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
