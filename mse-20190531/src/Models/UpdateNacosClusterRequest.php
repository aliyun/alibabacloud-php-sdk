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
     * @var int
     */
    public $checkPort;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $healthChecker;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mseSessionId;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
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
        'mseSessionId'            => 'MseSessionId',
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
        if (null !== $this->mseSessionId) {
            $res['MseSessionId'] = $this->mseSessionId;
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
        if (isset($map['MseSessionId'])) {
            $model->mseSessionId = $map['MseSessionId'];
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
