<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class Cluster extends Model
{
    /**
     * @description 集群id
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 集群类型
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description 集群配置
     *
     * @var string
     */
    public $config;

    /**
     * @description 集群名称
     *
     * @var string
     */
    public $name;

    /**
     * @description nas文件id
     *
     * @var string
     */
    public $nas;

    /**
     * @description 集群owner
     *
     * @var string
     */
    public $owner;

    /**
     * @description 个人nas挂载到容器路径
     *
     * @var string
     */
    public $privateContainerPath;

    /**
     * @description 个人nas挂载路径
     *
     * @var string
     */
    public $privateNasPath;

    /**
     * @description 公共nas挂载到容器的路径
     *
     * @var string
     */
    public $publicContainerPath;

    /**
     * @description 公共nas挂载路径
     *
     * @var string
     */
    public $publicNasPath;

    /**
     * @description 集群状态
     *
     * @var string
     */
    public $state;

    /**
     * @description 集群vSwitch
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description 集群vpc
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterId'            => 'ClusterId',
        'clusterType'          => 'ClusterType',
        'config'               => 'Config',
        'name'                 => 'Name',
        'nas'                  => 'Nas',
        'owner'                => 'Owner',
        'privateContainerPath' => 'PrivateContainerPath',
        'privateNasPath'       => 'PrivateNasPath',
        'publicContainerPath'  => 'PublicContainerPath',
        'publicNasPath'        => 'PublicNasPath',
        'state'                => 'State',
        'vSwitchId'            => 'VSwitchId',
        'vpcId'                => 'VpcId',
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
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nas) {
            $res['Nas'] = $this->nas;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->privateContainerPath) {
            $res['PrivateContainerPath'] = $this->privateContainerPath;
        }
        if (null !== $this->privateNasPath) {
            $res['PrivateNasPath'] = $this->privateNasPath;
        }
        if (null !== $this->publicContainerPath) {
            $res['PublicContainerPath'] = $this->publicContainerPath;
        }
        if (null !== $this->publicNasPath) {
            $res['PublicNasPath'] = $this->publicNasPath;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Cluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Nas'])) {
            $model->nas = $map['Nas'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PrivateContainerPath'])) {
            $model->privateContainerPath = $map['PrivateContainerPath'];
        }
        if (isset($map['PrivateNasPath'])) {
            $model->privateNasPath = $map['PrivateNasPath'];
        }
        if (isset($map['PublicContainerPath'])) {
            $model->publicContainerPath = $map['PublicContainerPath'];
        }
        if (isset($map['PublicNasPath'])) {
            $model->publicNasPath = $map['PublicNasPath'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
