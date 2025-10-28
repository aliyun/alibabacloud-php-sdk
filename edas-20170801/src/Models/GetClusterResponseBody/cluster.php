<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetClusterResponseBody;

use AlibabaCloud\Dara\Model;

class cluster extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $clusterImportStatus;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var int
     */
    public $clusterType;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $cpuUsed;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $csClusterId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $iaasProvider;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var int
     */
    public $memUsed;

    /**
     * @var int
     */
    public $networkMode;

    /**
     * @var int
     */
    public $nodeNum;

    /**
     * @var int
     */
    public $oversoldFactor;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $subClusterType;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterImportStatus' => 'ClusterImportStatus',
        'clusterName' => 'ClusterName',
        'clusterType' => 'ClusterType',
        'cpu' => 'Cpu',
        'cpuUsed' => 'CpuUsed',
        'createTime' => 'CreateTime',
        'csClusterId' => 'CsClusterId',
        'description' => 'Description',
        'iaasProvider' => 'IaasProvider',
        'mem' => 'Mem',
        'memUsed' => 'MemUsed',
        'networkMode' => 'NetworkMode',
        'nodeNum' => 'NodeNum',
        'oversoldFactor' => 'OversoldFactor',
        'regionId' => 'RegionId',
        'subClusterType' => 'SubClusterType',
        'updateTime' => 'UpdateTime',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterImportStatus) {
            $res['ClusterImportStatus'] = $this->clusterImportStatus;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->cpuUsed) {
            $res['CpuUsed'] = $this->cpuUsed;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->csClusterId) {
            $res['CsClusterId'] = $this->csClusterId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->iaasProvider) {
            $res['IaasProvider'] = $this->iaasProvider;
        }

        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }

        if (null !== $this->memUsed) {
            $res['MemUsed'] = $this->memUsed;
        }

        if (null !== $this->networkMode) {
            $res['NetworkMode'] = $this->networkMode;
        }

        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }

        if (null !== $this->oversoldFactor) {
            $res['OversoldFactor'] = $this->oversoldFactor;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->subClusterType) {
            $res['SubClusterType'] = $this->subClusterType;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterImportStatus'])) {
            $model->clusterImportStatus = $map['ClusterImportStatus'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CpuUsed'])) {
            $model->cpuUsed = $map['CpuUsed'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CsClusterId'])) {
            $model->csClusterId = $map['CsClusterId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IaasProvider'])) {
            $model->iaasProvider = $map['IaasProvider'];
        }

        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }

        if (isset($map['MemUsed'])) {
            $model->memUsed = $map['MemUsed'];
        }

        if (isset($map['NetworkMode'])) {
            $model->networkMode = $map['NetworkMode'];
        }

        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }

        if (isset($map['OversoldFactor'])) {
            $model->oversoldFactor = $map['OversoldFactor'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SubClusterType'])) {
            $model->subClusterType = $map['SubClusterType'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
