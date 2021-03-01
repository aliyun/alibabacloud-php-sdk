<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sClusterResponseBody\clusterPage\clusterList;

use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $subNetCidr;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $csClusterStatus;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $csClusterId;

    /**
     * @var int
     */
    public $networkMode;

    /**
     * @var int
     */
    public $clusterType;

    /**
     * @var int
     */
    public $clusterStatus;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var int
     */
    public $nodeNum;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $clusterImportStatus;
    protected $_name = [
        'vpcId'               => 'VpcId',
        'vswitchId'           => 'VswitchId',
        'subNetCidr'          => 'SubNetCidr',
        'mem'                 => 'Mem',
        'regionId'            => 'RegionId',
        'csClusterStatus'     => 'CsClusterStatus',
        'cpu'                 => 'Cpu',
        'description'         => 'Description',
        'csClusterId'         => 'CsClusterId',
        'networkMode'         => 'NetworkMode',
        'clusterType'         => 'ClusterType',
        'clusterStatus'       => 'ClusterStatus',
        'clusterName'         => 'ClusterName',
        'nodeNum'             => 'NodeNum',
        'clusterId'           => 'ClusterId',
        'clusterImportStatus' => 'ClusterImportStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->subNetCidr) {
            $res['SubNetCidr'] = $this->subNetCidr;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->csClusterStatus) {
            $res['CsClusterStatus'] = $this->csClusterStatus;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->csClusterId) {
            $res['CsClusterId'] = $this->csClusterId;
        }
        if (null !== $this->networkMode) {
            $res['NetworkMode'] = $this->networkMode;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->clusterStatus) {
            $res['ClusterStatus'] = $this->clusterStatus;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterImportStatus) {
            $res['ClusterImportStatus'] = $this->clusterImportStatus;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['SubNetCidr'])) {
            $model->subNetCidr = $map['SubNetCidr'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CsClusterStatus'])) {
            $model->csClusterStatus = $map['CsClusterStatus'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CsClusterId'])) {
            $model->csClusterId = $map['CsClusterId'];
        }
        if (isset($map['NetworkMode'])) {
            $model->networkMode = $map['NetworkMode'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ClusterStatus'])) {
            $model->clusterStatus = $map['ClusterStatus'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterImportStatus'])) {
            $model->clusterImportStatus = $map['ClusterImportStatus'];
        }

        return $model;
    }
}
