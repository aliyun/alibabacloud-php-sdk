<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateNacosClusterRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description 健康检查端口
     *
     * @var int
     */
    public $checkPort;

    /**
     * @description Nacos集群名
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description 分组名
     *
     * @var string
     */
    public $groupName;

    /**
     * @description 健康检查类型
     *
     * @var string
     */
    public $healthChecker;

    /**
     * @description 实例id
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 命名空间id
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description 服务名
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description 是否使用实例端口进行健康检查
     *
     * @var bool
     */
    public $useInstancePortForCheck;
    protected $_name = [
        'acceptLanguage'          => 'AcceptLanguage',
        'checkPort'               => 'CheckPort',
        'clusterName'             => 'ClusterName',
        'groupName'               => 'GroupName',
        'healthChecker'           => 'HealthChecker',
        'instanceId'              => 'InstanceId',
        'namespaceId'             => 'NamespaceId',
        'serviceName'             => 'ServiceName',
        'useInstancePortForCheck' => 'UseInstancePortForCheck',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->checkPort) {
            $res['CheckPort'] = $this->checkPort;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->healthChecker) {
            $res['HealthChecker'] = $this->healthChecker;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->useInstancePortForCheck) {
            $res['UseInstancePortForCheck'] = $this->useInstancePortForCheck;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNacosClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['CheckPort'])) {
            $model->checkPort = $map['CheckPort'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['HealthChecker'])) {
            $model->healthChecker = $map['HealthChecker'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['UseInstancePortForCheck'])) {
            $model->useInstancePortForCheck = $map['UseInstancePortForCheck'];
        }

        return $model;
    }
}
