<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateNacosClusterRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The port used for health checks.
     *
     * @example 80
     *
     * @var int
     */
    public $checkPort;

    /**
     * @description The name of the Nacos cluster.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The name of the group.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the health check.
     *
     * @example {"type":"none"}
     *
     * @var string
     */
    public $healthChecker;

    /**
     * @description The ID of the instance.
     *
     * @example mse-cn-123456
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the namespace.
     *
     * @example 9e78a671-4b9b-4dd4-99c1-0b9da87d3dec
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The name of the service.
     *
     * @example hello_service
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description Specifies whether to use the port of the instance for a health check.
     *
     * @example false
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
