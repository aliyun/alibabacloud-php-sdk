<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sClusterResponseBody\clusterPage\clusterList;

use AlibabaCloud\Tea\Model;

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
    public $clusterStatus;

    /**
     * @var int
     */
    public $clusterType;

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
    public $csClusterStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var int
     */
    public $networkMode;

    /**
     * @var int
     */
    public $nodeNum;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $subNetCidr;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'clusterImportStatus' => 'ClusterImportStatus',
        'clusterName'         => 'ClusterName',
        'clusterStatus'       => 'ClusterStatus',
        'clusterType'         => 'ClusterType',
        'cpu'                 => 'Cpu',
        'csClusterId'         => 'CsClusterId',
        'csClusterStatus'     => 'CsClusterStatus',
        'description'         => 'Description',
        'mem'                 => 'Mem',
        'networkMode'         => 'NetworkMode',
        'nodeNum'             => 'NodeNum',
        'regionId'            => 'RegionId',
        'subNetCidr'          => 'SubNetCidr',
        'vpcId'               => 'VpcId',
        'vswitchId'           => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->clusterStatus) {
            $res['ClusterStatus'] = $this->clusterStatus;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->csClusterId) {
            $res['CsClusterId'] = $this->csClusterId;
        }
        if (null !== $this->csClusterStatus) {
            $res['CsClusterStatus'] = $this->csClusterStatus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->networkMode) {
            $res['NetworkMode'] = $this->networkMode;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->subNetCidr) {
            $res['SubNetCidr'] = $this->subNetCidr;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterImportStatus'])) {
            $model->clusterImportStatus = $map['ClusterImportStatus'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterStatus'])) {
            $model->clusterStatus = $map['ClusterStatus'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CsClusterId'])) {
            $model->csClusterId = $map['CsClusterId'];
        }
        if (isset($map['CsClusterStatus'])) {
            $model->csClusterStatus = $map['CsClusterStatus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['NetworkMode'])) {
            $model->networkMode = $map['NetworkMode'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubNetCidr'])) {
            $model->subNetCidr = $map['SubNetCidr'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
