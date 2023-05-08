<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshClustersResponseBody;

use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example c.com
     *
     * @var string
     */
    public $clusterDomain;

    /**
     * @example c80f45444b3da447da60a911390c2****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example Ask
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The ID of the ASM instance.
     *
     * @example 2020-05-12T15:38:16+08:00
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The domain name of the cluster.
     *
     * @example fail
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 0
     *
     * @var int
     */
    public $forbiddenFlag;

    /**
     * @example [{"cluster":"cdd55bd6e054b4c6ca18ec02614******", "object":"Pod", "cidr":"172.16.0.0/24"},{"cluster":"cfa37fdf7cb1641e1976f8293ac******", "object":"Pod", "cidr":"172.16.0.0/24"}]
     *
     * @var string
     */
    public $forbiddenInfo;

    /**
     * @example ask1
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the cluster.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the cluster.
     *
     * @example cb8963379255149cb98c8686f274x****
     *
     * @var string
     */
    public $serviceMeshId;

    /**
     * @description The error message about the cluster.
     *
     * @example sg-bp197668l6iupljy****
     *
     * @var string
     */
    public $sgId;

    /**
     * @description The version number of the cluster.
     *
     * @example running
     *
     * @var string
     */
    public $state;

    /**
     * @description The ID of the region in which the cluster resides.
     *
     * @example 2020-05-12T15:38:16+08:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description Indicates that the cluster is available or the reason why the cluster cannot be added to the ASM instance. Valid values:
     *
     *   `0`: The cluster can be added to the ASM instance.
     *   `1`: The cluster cannot be added to the ASM instance because you do not have administrator permissions on the cluster.
     *   `2`: The cluster cannot be added to the ASM instance because the cluster and the ASM instance reside in different VPCs between which no private connections are built.
     *   `3`: The CIDR block of the cluster conflicts with that of the ASM instance.
     *   `4`: The cluster has a namespace that is named istio system.
     *
     * @example v1.16.6-aliyun.1
     *
     * @var string
     */
    public $version;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   `running`: The cluster is running.
     *   `starting`: The cluster is starting.
     *   `stopping`: The cluster is being stopped.
     *   `stopped`: The cluster is stopped.
     *   `failed`: The cluster fails to be run.
     *
     * @example vpc-8vbrwmt95b4zf6wf7****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterDomain' => 'ClusterDomain',
        'clusterId'     => 'ClusterId',
        'clusterType'   => 'ClusterType',
        'creationTime'  => 'CreationTime',
        'errorMessage'  => 'ErrorMessage',
        'forbiddenFlag' => 'ForbiddenFlag',
        'forbiddenInfo' => 'ForbiddenInfo',
        'name'          => 'Name',
        'regionId'      => 'RegionId',
        'serviceMeshId' => 'ServiceMeshId',
        'sgId'          => 'SgId',
        'state'         => 'State',
        'updateTime'    => 'UpdateTime',
        'version'       => 'Version',
        'vpcId'         => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterDomain) {
            $res['ClusterDomain'] = $this->clusterDomain;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->forbiddenFlag) {
            $res['ForbiddenFlag'] = $this->forbiddenFlag;
        }
        if (null !== $this->forbiddenInfo) {
            $res['ForbiddenInfo'] = $this->forbiddenInfo;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->sgId) {
            $res['SgId'] = $this->sgId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterDomain'])) {
            $model->clusterDomain = $map['ClusterDomain'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ForbiddenFlag'])) {
            $model->forbiddenFlag = $map['ForbiddenFlag'];
        }
        if (isset($map['ForbiddenInfo'])) {
            $model->forbiddenInfo = $map['ForbiddenInfo'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['SgId'])) {
            $model->sgId = $map['SgId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
