<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshClustersResponseBody;

use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @var string
     */
    public $clusterDomain;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $forbiddenFlag;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $sgId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $version;

    /**
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
