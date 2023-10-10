<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class GetServiceMethodPageRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 310b18c3-1dbe-4807-****-18d7d637****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The group to which the service belongs.
     *
     * @example DUBBO
     *
     * @var string
     */
    public $group;

    /**
     * @description The IP address of the service.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $ip;

    /**
     * @description The controller method.
     *
     * @example com.aliware.edas.DemoController
     *
     * @var string
     */
    public $methodController;

    /**
     * @description The name of the method.
     *
     * @example echo
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the namespace.
     *
     * @example cn-hangzhou:doc-test
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The source of the data. Valid values:
     *
     *   agent: Use this value if you use the service query feature of the latest version to pass the query result.
     *   registry: Use this value if you use the service query feature of the earlier version to pass the query result.
     *
     * @example agent
     *
     * @var string
     */
    public $origin;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request path.
     *
     * @example /echo/{str}
     *
     * @var string
     */
    public $path;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The type of the service registry.
     *
     * @example nacos
     *
     * @var string
     */
    public $registryType;

    /**
     * @description The ID of the service.
     *
     * @example edas.service.consumer
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The name of the service.
     *
     * @example edas.service.consumer
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The type of the service. Valid values:
     *
     *   dubbo: Dubbo service
     *   springCloud: Spring Cloud service
     *   hsf: High-speed Service Framework (HSF) service
     *
     * @example springCloud
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The version of the service.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @description The source of the service. Set the value to edas.
     *
     * @example edas
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'appId'            => 'appId',
        'group'            => 'group',
        'ip'               => 'ip',
        'methodController' => 'methodController',
        'name'             => 'name',
        'namespace'        => 'namespace',
        'origin'           => 'origin',
        'pageNumber'       => 'pageNumber',
        'pageSize'         => 'pageSize',
        'path'             => 'path',
        'region'           => 'region',
        'registryType'     => 'registryType',
        'serviceId'        => 'serviceId',
        'serviceName'      => 'serviceName',
        'serviceType'      => 'serviceType',
        'serviceVersion'   => 'serviceVersion',
        'source'           => 'source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }
        if (null !== $this->group) {
            $res['group'] = $this->group;
        }
        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }
        if (null !== $this->methodController) {
            $res['methodController'] = $this->methodController;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->origin) {
            $res['origin'] = $this->origin;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->registryType) {
            $res['registryType'] = $this->registryType;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->serviceType) {
            $res['serviceType'] = $this->serviceType;
        }
        if (null !== $this->serviceVersion) {
            $res['serviceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceMethodPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }
        if (isset($map['group'])) {
            $model->group = $map['group'];
        }
        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }
        if (isset($map['methodController'])) {
            $model->methodController = $map['methodController'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['origin'])) {
            $model->origin = $map['origin'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['registryType'])) {
            $model->registryType = $map['registryType'];
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['serviceType'])) {
            $model->serviceType = $map['serviceType'];
        }
        if (isset($map['serviceVersion'])) {
            $model->serviceVersion = $map['serviceVersion'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}
