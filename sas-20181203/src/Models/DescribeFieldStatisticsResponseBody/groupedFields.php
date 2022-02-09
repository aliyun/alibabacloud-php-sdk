<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeFieldStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class groupedFields extends Model
{
    /**
     * @var int
     */
    public $aliYunInstanceCount;

    /**
     * @var int
     */
    public $exposedInstanceCount;

    /**
     * @var int
     */
    public $generalAssetCount;

    /**
     * @var int
     */
    public $groupCount;

    /**
     * @var int
     */
    public $huaweiInstanceCount;

    /**
     * @var int
     */
    public $idcInstanceCount;

    /**
     * @var int
     */
    public $importantAssetCount;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var int
     */
    public $instanceSyncTaskCount;

    /**
     * @var int
     */
    public $newInstanceCount;

    /**
     * @var int
     */
    public $notRunningStatusCount;

    /**
     * @var int
     */
    public $offlineInstanceCount;

    /**
     * @var int
     */
    public $pauseInstanceCount;

    /**
     * @var int
     */
    public $regionCount;

    /**
     * @var int
     */
    public $riskInstanceCount;

    /**
     * @var int
     */
    public $tencentInstanceCount;

    /**
     * @var int
     */
    public $testAssetCount;

    /**
     * @var int
     */
    public $unprotectedInstanceCount;

    /**
     * @var int
     */
    public $vpcCount;
    protected $_name = [
        'aliYunInstanceCount'      => 'AliYunInstanceCount',
        'exposedInstanceCount'     => 'ExposedInstanceCount',
        'generalAssetCount'        => 'GeneralAssetCount',
        'groupCount'               => 'GroupCount',
        'huaweiInstanceCount'      => 'HuaweiInstanceCount',
        'idcInstanceCount'         => 'IdcInstanceCount',
        'importantAssetCount'      => 'ImportantAssetCount',
        'instanceCount'            => 'InstanceCount',
        'instanceSyncTaskCount'    => 'InstanceSyncTaskCount',
        'newInstanceCount'         => 'NewInstanceCount',
        'notRunningStatusCount'    => 'NotRunningStatusCount',
        'offlineInstanceCount'     => 'OfflineInstanceCount',
        'pauseInstanceCount'       => 'PauseInstanceCount',
        'regionCount'              => 'RegionCount',
        'riskInstanceCount'        => 'RiskInstanceCount',
        'tencentInstanceCount'     => 'TencentInstanceCount',
        'testAssetCount'           => 'TestAssetCount',
        'unprotectedInstanceCount' => 'UnprotectedInstanceCount',
        'vpcCount'                 => 'VpcCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliYunInstanceCount) {
            $res['AliYunInstanceCount'] = $this->aliYunInstanceCount;
        }
        if (null !== $this->exposedInstanceCount) {
            $res['ExposedInstanceCount'] = $this->exposedInstanceCount;
        }
        if (null !== $this->generalAssetCount) {
            $res['GeneralAssetCount'] = $this->generalAssetCount;
        }
        if (null !== $this->groupCount) {
            $res['GroupCount'] = $this->groupCount;
        }
        if (null !== $this->huaweiInstanceCount) {
            $res['HuaweiInstanceCount'] = $this->huaweiInstanceCount;
        }
        if (null !== $this->idcInstanceCount) {
            $res['IdcInstanceCount'] = $this->idcInstanceCount;
        }
        if (null !== $this->importantAssetCount) {
            $res['ImportantAssetCount'] = $this->importantAssetCount;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->instanceSyncTaskCount) {
            $res['InstanceSyncTaskCount'] = $this->instanceSyncTaskCount;
        }
        if (null !== $this->newInstanceCount) {
            $res['NewInstanceCount'] = $this->newInstanceCount;
        }
        if (null !== $this->notRunningStatusCount) {
            $res['NotRunningStatusCount'] = $this->notRunningStatusCount;
        }
        if (null !== $this->offlineInstanceCount) {
            $res['OfflineInstanceCount'] = $this->offlineInstanceCount;
        }
        if (null !== $this->pauseInstanceCount) {
            $res['PauseInstanceCount'] = $this->pauseInstanceCount;
        }
        if (null !== $this->regionCount) {
            $res['RegionCount'] = $this->regionCount;
        }
        if (null !== $this->riskInstanceCount) {
            $res['RiskInstanceCount'] = $this->riskInstanceCount;
        }
        if (null !== $this->tencentInstanceCount) {
            $res['TencentInstanceCount'] = $this->tencentInstanceCount;
        }
        if (null !== $this->testAssetCount) {
            $res['TestAssetCount'] = $this->testAssetCount;
        }
        if (null !== $this->unprotectedInstanceCount) {
            $res['UnprotectedInstanceCount'] = $this->unprotectedInstanceCount;
        }
        if (null !== $this->vpcCount) {
            $res['VpcCount'] = $this->vpcCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupedFields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliYunInstanceCount'])) {
            $model->aliYunInstanceCount = $map['AliYunInstanceCount'];
        }
        if (isset($map['ExposedInstanceCount'])) {
            $model->exposedInstanceCount = $map['ExposedInstanceCount'];
        }
        if (isset($map['GeneralAssetCount'])) {
            $model->generalAssetCount = $map['GeneralAssetCount'];
        }
        if (isset($map['GroupCount'])) {
            $model->groupCount = $map['GroupCount'];
        }
        if (isset($map['HuaweiInstanceCount'])) {
            $model->huaweiInstanceCount = $map['HuaweiInstanceCount'];
        }
        if (isset($map['IdcInstanceCount'])) {
            $model->idcInstanceCount = $map['IdcInstanceCount'];
        }
        if (isset($map['ImportantAssetCount'])) {
            $model->importantAssetCount = $map['ImportantAssetCount'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['InstanceSyncTaskCount'])) {
            $model->instanceSyncTaskCount = $map['InstanceSyncTaskCount'];
        }
        if (isset($map['NewInstanceCount'])) {
            $model->newInstanceCount = $map['NewInstanceCount'];
        }
        if (isset($map['NotRunningStatusCount'])) {
            $model->notRunningStatusCount = $map['NotRunningStatusCount'];
        }
        if (isset($map['OfflineInstanceCount'])) {
            $model->offlineInstanceCount = $map['OfflineInstanceCount'];
        }
        if (isset($map['PauseInstanceCount'])) {
            $model->pauseInstanceCount = $map['PauseInstanceCount'];
        }
        if (isset($map['RegionCount'])) {
            $model->regionCount = $map['RegionCount'];
        }
        if (isset($map['RiskInstanceCount'])) {
            $model->riskInstanceCount = $map['RiskInstanceCount'];
        }
        if (isset($map['TencentInstanceCount'])) {
            $model->tencentInstanceCount = $map['TencentInstanceCount'];
        }
        if (isset($map['TestAssetCount'])) {
            $model->testAssetCount = $map['TestAssetCount'];
        }
        if (isset($map['UnprotectedInstanceCount'])) {
            $model->unprotectedInstanceCount = $map['UnprotectedInstanceCount'];
        }
        if (isset($map['VpcCount'])) {
            $model->vpcCount = $map['VpcCount'];
        }

        return $model;
    }
}
