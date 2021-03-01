<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetClusterResponseBody;

use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @var int
     */
    public $oversoldFactor;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var int
     */
    public $memUsed;

    /**
     * @var string
     */
    public $iaasProvider;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $cpuUsed;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $csClusterId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $networkMode;

    /**
     * @var int
     */
    public $clusterType;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var int
     */
    public $nodeNum;

    /**
     * @var int
     */
    public $clusterImportStatus;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'oversoldFactor'      => 'OversoldFactor',
        'vpcId'               => 'VpcId',
        'updateTime'          => 'UpdateTime',
        'memUsed'             => 'MemUsed',
        'iaasProvider'        => 'IaasProvider',
        'createTime'          => 'CreateTime',
        'cpuUsed'             => 'CpuUsed',
        'mem'                 => 'Mem',
        'regionId'            => 'RegionId',
        'cpu'                 => 'Cpu',
        'csClusterId'         => 'CsClusterId',
        'description'         => 'Description',
        'networkMode'         => 'NetworkMode',
        'clusterType'         => 'ClusterType',
        'clusterName'         => 'ClusterName',
        'nodeNum'             => 'NodeNum',
        'clusterImportStatus' => 'ClusterImportStatus',
        'clusterId'           => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->oversoldFactor) {
            $res['OversoldFactor'] = $this->oversoldFactor;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->memUsed) {
            $res['MemUsed'] = $this->memUsed;
        }
        if (null !== $this->iaasProvider) {
            $res['IaasProvider'] = $this->iaasProvider;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->cpuUsed) {
            $res['CpuUsed'] = $this->cpuUsed;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->csClusterId) {
            $res['CsClusterId'] = $this->csClusterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->networkMode) {
            $res['NetworkMode'] = $this->networkMode;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->clusterImportStatus) {
            $res['ClusterImportStatus'] = $this->clusterImportStatus;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OversoldFactor'])) {
            $model->oversoldFactor = $map['OversoldFactor'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['MemUsed'])) {
            $model->memUsed = $map['MemUsed'];
        }
        if (isset($map['IaasProvider'])) {
            $model->iaasProvider = $map['IaasProvider'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CpuUsed'])) {
            $model->cpuUsed = $map['CpuUsed'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CsClusterId'])) {
            $model->csClusterId = $map['CsClusterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NetworkMode'])) {
            $model->networkMode = $map['NetworkMode'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['ClusterImportStatus'])) {
            $model->clusterImportStatus = $map['ClusterImportStatus'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
