<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sClusterResponseBody\clusterPage\clusterList;

use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example 81453e4b-4df0-4592-****-b835a2ee****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The import state of the cluster. Valid values:
     *
     *   0: The cluster is not imported.
     *   1: The cluster is imported.
     *   2: The cluster fails to be imported.
     *   3: The cluster is being imported.
     *   4: The cluster is deleted.
     *
     * @example 1
     *
     * @var int
     */
    public $clusterImportStatus;

    /**
     * @description The name of the cluster.
     *
     * @example test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   1: The cluster runs as expected.
     *   2: The cluster does not run as expected.
     *   3: The cluster is offline.
     *
     * @example 1
     *
     * @var int
     */
    public $clusterStatus;

    /**
     * @description The type of the cluster. Valid values:
     *
     *   2: Elastic Compute Service (ECS) cluster
     *   5: ACK cluster or Serverless Kubernetes cluster
     *
     * @example 5
     *
     * @var int
     */
    public $clusterType;

    /**
     * @description The total number of CPU cores.
     *
     * @example 4
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The ID of the ACK cluster.
     *
     * @example 2ce62869f4d4466b920312315f05****
     *
     * @var string
     */
    public $csClusterId;

    /**
     * @description The state of the ACK cluster. Valid values:
     *
     *   initial: The cluster is being initialized.
     *   failed: The cluster fails to be created.
     *   running: The cluster is running.
     *   updating: The cluster is being updated.
     *   scaling: The cluster is being scaled out.
     *   removing: Nodes are being removed from the cluster.
     *   upgrading: The cluster is being upgraded.
     *   deleting: The cluster is being deleted.
     *   delete_failed: The cluster fails to be deleted.
     *   deleted: The cluster is deleted. The deleted cluster is invisible to users.
     *
     * @example running
     *
     * @var string
     */
    public $csClusterStatus;

    /**
     * @description The description of the cluster.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The total size of memory. Unit: MB.
     *
     * @example 2048
     *
     * @var int
     */
    public $mem;

    /**
     * @description The network type of the cluster. Valid values:
     *
     *   1: classic network
     *   2: VPC
     *
     * @example 2
     *
     * @var int
     */
    public $networkMode;

    /**
     * @description The number of nodes.
     *
     * @example 4
     *
     * @var int
     */
    public $nodeNum;

    /**
     * @description The ID of the namespace.
     *
     * @example test
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The subtype of the cluster. Valid values:
     *
     *   Ask: Serverless Kubernetes cluster
     *   ManagedKubernetes: ACK cluster
     *
     * @example Ask
     *
     * @var string
     */
    public $subClusterType;

    /**
     * @description The CIDR block of the subnet.
     *
     * @example 172.20.0.0/16
     *
     * @var string
     */
    public $subNetCidr;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-**z1mlwpbjx3e9m**
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp1uf97****xjxgip****
     *
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
        'subClusterType'      => 'SubClusterType',
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
        if (null !== $this->subClusterType) {
            $res['SubClusterType'] = $this->subClusterType;
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
        if (isset($map['SubClusterType'])) {
            $model->subClusterType = $map['SubClusterType'];
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
