<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\discoveryConfig;

use AlibabaCloud\Tea\Model;

class nacosConfig extends Model
{
    /**
     * @description The AccessKey of the RAM user that has the resource management permissions on Microservices Engine (MSE).
     *
     * @example A5FIDxxxxxx
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description The authentication method.
     *
     * @example PASSWORD
     *
     * @var string
     */
    public $authType;

    /**
     * @description The name of the cluster to which the microservice belongs.
     *
     * @example cluster1
     *
     * @var string
     */
    public $clusters;

    /**
     * @description The name of the group to which the microservice that is registered with Nacos belongs.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the namespace where the microservice that is registered with Nacos resides.
     *
     * @example public
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The password.
     *
     * @example password
     *
     * @var string
     */
    public $password;

    /**
     * @description The SecretKey of the RAM user that has the resource management permissions on MSE.
     *
     * @example dl5loxxxxxx
     *
     * @var string
     */
    public $secretKey;

    /**
     * @description The Nacos service address.
     *
     * @example http://1xx.2xx.3xx.4xx:8848
     *
     * @var string
     */
    public $serverAddress;

    /**
     * @description The microservice name.
     *
     * @example service-provider
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The username.
     *
     * @example username
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'accessKey'     => 'AccessKey',
        'authType'      => 'AuthType',
        'clusters'      => 'Clusters',
        'groupName'     => 'GroupName',
        'namespace'     => 'Namespace',
        'password'      => 'Password',
        'secretKey'     => 'SecretKey',
        'serverAddress' => 'ServerAddress',
        'serviceName'   => 'ServiceName',
        'userName'      => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->clusters) {
            $res['Clusters'] = $this->clusters;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }
        if (null !== $this->serverAddress) {
            $res['ServerAddress'] = $this->serverAddress;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nacosConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['Clusters'])) {
            $model->clusters = $map['Clusters'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }
        if (isset($map['ServerAddress'])) {
            $model->serverAddress = $map['ServerAddress'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
