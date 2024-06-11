<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeFieldStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class groupedFields extends Model
{
    /**
     * @description The number of assets that are deployed on Alibaba Cloud.
     *
     * @example 100
     *
     * @var int
     */
    public $aliYunInstanceCount;

    /**
     * @description The number of servers.
     *
     * @example 100
     *
     * @var int
     */
    public $awsInstanceCount;

    /**
     * @description The number of third-party cloud servers.
     *
     * @example 5
     *
     * @var int
     */
    public $azureInstanceCount;

    /**
     * @var int
     */
    public $exposedInstanceCoreCount;

    /**
     * @description The number of exposed servers.
     *
     * @example 1
     *
     * @var int
     */
    public $exposedInstanceCount;

    /**
     * @description The number of assets whose importance is common.
     *
     * @example 10
     *
     * @var int
     */
    public $generalAssetCount;

    /**
     * @description The number of server groups.
     *
     * @example 20
     *
     * @var int
     */
    public $groupCount;

    /**
     * @description The number of instances that are provisioned by third-party providers.
     *
     * @example 0
     *
     * @var int
     */
    public $huaweiInstanceCount;

    /**
     * @description The number of assets that can be protected by Security Center.
     *
     * @example 100
     *
     * @var int
     */
    public $idcInstanceCount;

    /**
     * @description The number of assets whose importance is important.
     *
     * @example 10
     *
     * @var int
     */
    public $importantAssetCount;

    /**
     * @var int
     */
    public $instanceCoreCount;

    /**
     * @description The total number of assets of the specified type. If no asset types are specified, this parameter indicates the total number of all servers and Alibaba Cloud services within your account.
     *
     * @example 100
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The total number of tasks for the specified type of assets. If no asset types are specified, this parameter indicates the total number of all servers and Alibaba Cloud services within your account.
     *
     * @example 10
     *
     * @var int
     */
    public $instanceSyncTaskCount;

    /**
     * @var int
     */
    public $newInstanceCoreCount;

    /**
     * @description The number of newly added servers.
     *
     * @example 10
     *
     * @var int
     */
    public $newInstanceCount;

    /**
     * @description The number of servers on which no risks are detected.
     *
     * @example 10
     *
     * @var int
     */
    public $noRiskInstanceCount;

    /**
     * @var int
     */
    public $notRunningStatusCoreCount;

    /**
     * @description The number of servers that are shut down.
     *
     * @example 10
     *
     * @var int
     */
    public $notRunningStatusCount;

    /**
     * @description The number of servers whose Security Center agent status is Offline.
     *
     * @example 21
     *
     * @var int
     */
    public $offlineInstanceCount;

    /**
     * @description The number of servers outside the cloud.
     *
     * @example 20
     *
     * @var int
     */
    public $outMachineInstanceCount;

    /**
     * @description The number of servers for which the Security Center agent suspends protection.
     *
     * @example 10
     *
     * @var int
     */
    public $pauseInstanceCount;

    /**
     * @description The number of regions to which the servers belong.
     *
     * @example 11
     *
     * @var int
     */
    public $regionCount;

    /**
     * @var int
     */
    public $riskInstanceCoreCount;

    /**
     * @description The number of assets that are at risk.
     *
     * @example 90
     *
     * @var int
     */
    public $riskInstanceCount;

    /**
     * @description The total number of cloud services that are protected by Security Center.
     *
     * @example 10
     *
     * @var int
     */
    public $tencentInstanceCount;

    /**
     * @description The number of assets whose importance is test.
     *
     * @example 10
     *
     * @var int
     */
    public $testAssetCount;

    /**
     * @description The number of simple application servers.
     *
     * @example 2
     *
     * @var int
     */
    public $tripartiteInstanceCount;

    /**
     * @description The number of servers that are in the Unknown state.
     *
     * @example 1
     *
     * @var int
     */
    public $unKnowStatusInstanceCount;

    /**
     * @var int
     */
    public $unprotectedInstanceCoreCount;

    /**
     * @description The number of unprotected assets.
     *
     * @example 10
     *
     * @var int
     */
    public $unprotectedInstanceCount;

    /**
     * @description The number of virtual private clouds (VPCs).
     *
     * @example 5
     *
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
    }

    public function toMap()
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
