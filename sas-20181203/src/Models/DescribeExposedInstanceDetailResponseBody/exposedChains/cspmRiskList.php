<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody\exposedChains;

use AlibabaCloud\Tea\Model;

class cspmRiskList extends Model
{
    /**
     * @description The subtype of the cloud asset. Valid values:
     *
     *   **0**: Elastic Compute Service (ECS).
     *
     *   **100**: instance.
     *
     *   **3**: ApsaraDB RDS.
     *
     *   **0**: instance.
     *
     *   **4**: ApsaraDB for MongoDB (MongoDB).
     *
     *   **0**: instance.
     *
     *   **5**: ApsaraDB for Redis (Redis).
     *
     *   **0**: instance.
     *
     * @example 100
     *
     * @var int
     */
    public $assetSubType;

    /**
     * @description The subtype name of the cloud asset. Valid values:
     *
     *   **INSTANCE**: MongoDB instance, Apsara DB for RDS instance, and ApsaraDB for Redis instance.
     *   **ECS_INSTANCE**: ECS instance.
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $assetSubTypeName;

    /**
     * @description The instance type. Valid values:
     *
     *   0: an ECS instance.
     *   3: an ApsaraDB RDS instance.
     *   4: an ApsaraDB for MongoDB instance.
     *   5: an ApsaraDB for Redis instance.
     *
     * @example 0
     *
     * @var int
     */
    public $assetType;

    /**
     * @description The name of the cloud asset type. Valid values:
     *
     *   **ECS**
     *   **RDS**
     *   **KVSTORE**
     *   **MONGODB**
     *
     * @example ECS
     *
     * @var string
     */
    public $assetTypeName;

    /**
     * @description The name of the check item.
     *
     * @example Create Alert Rule
     *
     * @var string
     */
    public $checkName;

    /**
     * @description The instance ID.
     *
     * @example i-bp14ggqzi9k6ocfb****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The risk level. Valid values:
     *
     *   **HIGH**
     *   **MEDIUM**
     *   **LOW**
     *
     * @example HIGH
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The type of the cloud asset by source. Valid values:
     *
     *   **0**: an asset provided by Alibaba Cloud.
     *
     * @example 0
     *
     * @var int
     */
    public $vendor;
    protected $_name = [
        'assetSubType'     => 'AssetSubType',
        'assetSubTypeName' => 'AssetSubTypeName',
        'assetType'        => 'AssetType',
        'assetTypeName'    => 'AssetTypeName',
        'checkName'        => 'CheckName',
        'instanceId'       => 'InstanceId',
        'regionId'         => 'RegionId',
        'riskLevel'        => 'RiskLevel',
        'vendor'           => 'Vendor',
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
        if (null !== $this->assetSubTypeName) {
            $res['AssetSubTypeName'] = $this->assetSubTypeName;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->assetTypeName) {
            $res['AssetTypeName'] = $this->assetTypeName;
        }
        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cspmRiskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetSubType'])) {
            $model->assetSubType = $map['AssetSubType'];
        }
        if (isset($map['AssetSubTypeName'])) {
            $model->assetSubTypeName = $map['AssetSubTypeName'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['AssetTypeName'])) {
            $model->assetTypeName = $map['AssetTypeName'];
        }
        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
