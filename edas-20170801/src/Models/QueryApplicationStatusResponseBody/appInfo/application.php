<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo;

use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 3616cdca-4f92-4413-****-************
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The build package number of Enterprise Distributed Application Service (EDAS) Container.
     *
     * @example 0
     *
     * @var int
     */
    public $buildPackageId;

    /**
     * @description The ID of the cluster.
     *
     * @example 0d247b93-8d62-4e34-****-************
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of CPU cores used by the application.
     *
     * @example 0
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The time when the application was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573626207270
     *
     * @var int
     */
    public $createTime;

    /**
     * @description Indicates whether the application is a Docker application.
     *
     * @example false
     *
     * @var bool
     */
    public $dockerize;

    /**
     * @description The email address of the user who created the application.
     *
     * @example 1234567@qq.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The health check URL.
     *
     * @example “”
     *
     * @var string
     */
    public $healthCheckUrl;

    /**
     * @description The number of application instances.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The time when the application was launched. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 0
     *
     * @var int
     */
    public $launchTime;

    /**
     * @description The memory size.
     *
     * @example 0
     *
     * @var int
     */
    public $memory;

    /**
     * @description The name of the application.
     *
     * @example EDAS-scaled-cluster:default cluster
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the user who created the application.
     *
     * @example edas_com***_****@******-*****.***
     *
     * @var string
     */
    public $owner;

    /**
     * @description The mobile number of the user who created the application.
     *
     * @example 1886666****
     *
     * @var string
     */
    public $phone;

    /**
     * @description The port used by the application.
     *
     * @example 8080
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the namespace.
     *
     * @example cn-shenzhen:test
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of application instances that are running.
     *
     * @example 1
     *
     * @var int
     */
    public $runningInstanceCount;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example edas_com***_****@******-*****.***
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'applicationId'        => 'ApplicationId',
        'buildPackageId'       => 'BuildPackageId',
        'clusterId'            => 'ClusterId',
        'cpu'                  => 'Cpu',
        'createTime'           => 'CreateTime',
        'dockerize'            => 'Dockerize',
        'email'                => 'Email',
        'healthCheckUrl'       => 'HealthCheckUrl',
        'instanceCount'        => 'InstanceCount',
        'launchTime'           => 'LaunchTime',
        'memory'               => 'Memory',
        'name'                 => 'Name',
        'owner'                => 'Owner',
        'phone'                => 'Phone',
        'port'                 => 'Port',
        'regionId'             => 'RegionId',
        'runningInstanceCount' => 'RunningInstanceCount',
        'userId'               => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->buildPackageId) {
            $res['BuildPackageId'] = $this->buildPackageId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dockerize) {
            $res['Dockerize'] = $this->dockerize;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->healthCheckUrl) {
            $res['HealthCheckUrl'] = $this->healthCheckUrl;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->launchTime) {
            $res['LaunchTime'] = $this->launchTime;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->runningInstanceCount) {
            $res['RunningInstanceCount'] = $this->runningInstanceCount;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return application
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['BuildPackageId'])) {
            $model->buildPackageId = $map['BuildPackageId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Dockerize'])) {
            $model->dockerize = $map['Dockerize'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['HealthCheckUrl'])) {
            $model->healthCheckUrl = $map['HealthCheckUrl'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['LaunchTime'])) {
            $model->launchTime = $map['LaunchTime'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RunningInstanceCount'])) {
            $model->runningInstanceCount = $map['RunningInstanceCount'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
