<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetSummaryResponseBody\groupedFields;

use AlibabaCloud\Tea\Model;

class cloudAssetSummaryMetas extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $assetSubType;

    /**
     * @example 16
     *
     * @var int
     */
    public $assetType;

    /**
     * @example 16
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @example 5
     *
     * @var int
     */
    public $instanceRiskCount;
    protected $_name = [
        'assetSubType'      => 'AssetSubType',
        'assetType'         => 'AssetType',
        'instanceCount'     => 'InstanceCount',
        'instanceRiskCount' => 'InstanceRiskCount',
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
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->instanceRiskCount) {
            $res['InstanceRiskCount'] = $this->instanceRiskCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudAssetSummaryMetas
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
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['InstanceRiskCount'])) {
            $model->instanceRiskCount = $map['InstanceRiskCount'];
        }

        return $model;
    }
}
