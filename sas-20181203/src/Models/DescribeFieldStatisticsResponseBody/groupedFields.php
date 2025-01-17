<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeFieldStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class groupedFields extends Model
{
    /**
     * @var int
     */
    public $aliYunInstanceCount;
    /**
     * @var int
     */
    public $awsInstanceCount;
    /**
     * @var int
     */
    public $azureInstanceCount;
    /**
     * @var int
     */
    public $exposedInstanceCoreCount;
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
    public $instanceCoreCount;
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
    public $newInstanceCoreCount;
    /**
     * @var int
     */
    public $newInstanceCount;
    /**
     * @var int
     */
    public $noRiskInstanceCount;
    /**
     * @var int
     */
    public $notBindMachineInstanceCount;
    /**
     * @var int
     */
    public $notRunningStatusCoreCount;
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
    public $outMachineInstanceCount;
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
    public $riskInstanceCoreCount;
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
    public $tripartiteInstanceCount;
    /**
     * @var int
     */
    public $unKnowStatusInstanceCount;
    /**
     * @var int
     */
    public $unprotectedInstanceCoreCount;
    /**
     * @var int
     */
    public $unprotectedInstanceCount;
    /**
     * @var int
     */
    public $vpcCount;
    protected $_name = [
        'aliYunInstanceCount'          => 'AliYunInstanceCount',
        'awsInstanceCount'             => 'AwsInstanceCount',
        'azureInstanceCount'           => 'AzureInstanceCount',
        'exposedInstanceCoreCount'     => 'ExposedInstanceCoreCount',
        'exposedInstanceCount'         => 'ExposedInstanceCount',
        'generalAssetCount'            => 'GeneralAssetCount',
        'groupCount'                   => 'GroupCount',
        'huaweiInstanceCount'          => 'HuaweiInstanceCount',
        'idcInstanceCount'             => 'IdcInstanceCount',
        'importantAssetCount'          => 'ImportantAssetCount',
        'instanceCoreCount'            => 'InstanceCoreCount',
        'instanceCount'                => 'InstanceCount',
        'instanceSyncTaskCount'        => 'InstanceSyncTaskCount',
        'newInstanceCoreCount'         => 'NewInstanceCoreCount',
        'newInstanceCount'             => 'NewInstanceCount',
        'noRiskInstanceCount'          => 'NoRiskInstanceCount',
        'notBindMachineInstanceCount'  => 'NotBindMachineInstanceCount',
        'notRunningStatusCoreCount'    => 'NotRunningStatusCoreCount',
        'notRunningStatusCount'        => 'NotRunningStatusCount',
        'offlineInstanceCount'         => 'OfflineInstanceCount',
        'outMachineInstanceCount'      => 'OutMachineInstanceCount',
        'pauseInstanceCount'           => 'PauseInstanceCount',
        'regionCount'                  => 'RegionCount',
        'riskInstanceCoreCount'        => 'RiskInstanceCoreCount',
        'riskInstanceCount'            => 'RiskInstanceCount',
        'tencentInstanceCount'         => 'TencentInstanceCount',
        'testAssetCount'               => 'TestAssetCount',
        'tripartiteInstanceCount'      => 'TripartiteInstanceCount',
        'unKnowStatusInstanceCount'    => 'UnKnowStatusInstanceCount',
        'unprotectedInstanceCoreCount' => 'UnprotectedInstanceCoreCount',
        'unprotectedInstanceCount'     => 'UnprotectedInstanceCount',
        'vpcCount'                     => 'VpcCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliYunInstanceCount) {
            $res['AliYunInstanceCount'] = $this->aliYunInstanceCount;
        }

        if (null !== $this->awsInstanceCount) {
            $res['AwsInstanceCount'] = $this->awsInstanceCount;
        }

        if (null !== $this->azureInstanceCount) {
            $res['AzureInstanceCount'] = $this->azureInstanceCount;
        }

        if (null !== $this->exposedInstanceCoreCount) {
            $res['ExposedInstanceCoreCount'] = $this->exposedInstanceCoreCount;
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

        if (null !== $this->instanceCoreCount) {
            $res['InstanceCoreCount'] = $this->instanceCoreCount;
        }

        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }

        if (null !== $this->instanceSyncTaskCount) {
            $res['InstanceSyncTaskCount'] = $this->instanceSyncTaskCount;
        }

        if (null !== $this->newInstanceCoreCount) {
            $res['NewInstanceCoreCount'] = $this->newInstanceCoreCount;
        }

        if (null !== $this->newInstanceCount) {
            $res['NewInstanceCount'] = $this->newInstanceCount;
        }

        if (null !== $this->noRiskInstanceCount) {
            $res['NoRiskInstanceCount'] = $this->noRiskInstanceCount;
        }

        if (null !== $this->notBindMachineInstanceCount) {
            $res['NotBindMachineInstanceCount'] = $this->notBindMachineInstanceCount;
        }

        if (null !== $this->notRunningStatusCoreCount) {
            $res['NotRunningStatusCoreCount'] = $this->notRunningStatusCoreCount;
        }

        if (null !== $this->notRunningStatusCount) {
            $res['NotRunningStatusCount'] = $this->notRunningStatusCount;
        }

        if (null !== $this->offlineInstanceCount) {
            $res['OfflineInstanceCount'] = $this->offlineInstanceCount;
        }

        if (null !== $this->outMachineInstanceCount) {
            $res['OutMachineInstanceCount'] = $this->outMachineInstanceCount;
        }

        if (null !== $this->pauseInstanceCount) {
            $res['PauseInstanceCount'] = $this->pauseInstanceCount;
        }

        if (null !== $this->regionCount) {
            $res['RegionCount'] = $this->regionCount;
        }

        if (null !== $this->riskInstanceCoreCount) {
            $res['RiskInstanceCoreCount'] = $this->riskInstanceCoreCount;
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

        if (null !== $this->tripartiteInstanceCount) {
            $res['TripartiteInstanceCount'] = $this->tripartiteInstanceCount;
        }

        if (null !== $this->unKnowStatusInstanceCount) {
            $res['UnKnowStatusInstanceCount'] = $this->unKnowStatusInstanceCount;
        }

        if (null !== $this->unprotectedInstanceCoreCount) {
            $res['UnprotectedInstanceCoreCount'] = $this->unprotectedInstanceCoreCount;
        }

        if (null !== $this->unprotectedInstanceCount) {
            $res['UnprotectedInstanceCount'] = $this->unprotectedInstanceCount;
        }

        if (null !== $this->vpcCount) {
            $res['VpcCount'] = $this->vpcCount;
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
        if (isset($map['AliYunInstanceCount'])) {
            $model->aliYunInstanceCount = $map['AliYunInstanceCount'];
        }

        if (isset($map['AwsInstanceCount'])) {
            $model->awsInstanceCount = $map['AwsInstanceCount'];
        }

        if (isset($map['AzureInstanceCount'])) {
            $model->azureInstanceCount = $map['AzureInstanceCount'];
        }

        if (isset($map['ExposedInstanceCoreCount'])) {
            $model->exposedInstanceCoreCount = $map['ExposedInstanceCoreCount'];
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

        if (isset($map['InstanceCoreCount'])) {
            $model->instanceCoreCount = $map['InstanceCoreCount'];
        }

        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }

        if (isset($map['InstanceSyncTaskCount'])) {
            $model->instanceSyncTaskCount = $map['InstanceSyncTaskCount'];
        }

        if (isset($map['NewInstanceCoreCount'])) {
            $model->newInstanceCoreCount = $map['NewInstanceCoreCount'];
        }

        if (isset($map['NewInstanceCount'])) {
            $model->newInstanceCount = $map['NewInstanceCount'];
        }

        if (isset($map['NoRiskInstanceCount'])) {
            $model->noRiskInstanceCount = $map['NoRiskInstanceCount'];
        }

        if (isset($map['NotBindMachineInstanceCount'])) {
            $model->notBindMachineInstanceCount = $map['NotBindMachineInstanceCount'];
        }

        if (isset($map['NotRunningStatusCoreCount'])) {
            $model->notRunningStatusCoreCount = $map['NotRunningStatusCoreCount'];
        }

        if (isset($map['NotRunningStatusCount'])) {
            $model->notRunningStatusCount = $map['NotRunningStatusCount'];
        }

        if (isset($map['OfflineInstanceCount'])) {
            $model->offlineInstanceCount = $map['OfflineInstanceCount'];
        }

        if (isset($map['OutMachineInstanceCount'])) {
            $model->outMachineInstanceCount = $map['OutMachineInstanceCount'];
        }

        if (isset($map['PauseInstanceCount'])) {
            $model->pauseInstanceCount = $map['PauseInstanceCount'];
        }

        if (isset($map['RegionCount'])) {
            $model->regionCount = $map['RegionCount'];
        }

        if (isset($map['RiskInstanceCoreCount'])) {
            $model->riskInstanceCoreCount = $map['RiskInstanceCoreCount'];
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

        if (isset($map['TripartiteInstanceCount'])) {
            $model->tripartiteInstanceCount = $map['TripartiteInstanceCount'];
        }

        if (isset($map['UnKnowStatusInstanceCount'])) {
            $model->unKnowStatusInstanceCount = $map['UnKnowStatusInstanceCount'];
        }

        if (isset($map['UnprotectedInstanceCoreCount'])) {
            $model->unprotectedInstanceCoreCount = $map['UnprotectedInstanceCoreCount'];
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
