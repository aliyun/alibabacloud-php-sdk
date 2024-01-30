<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class GetServiceDetailRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example efbda488-7b33-432f-a40d-****0047****
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
     * @description The IP address of the service provider. Fuzzy searches are supported.
     *
     * @example 10.20.x.xx
     *
     * @var string
     */
    public $ip;

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
     * @description The region ID of the service.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The type of the service registry. This parameter is deprecated. You can ignore it.
     *
     * @example nacos
     *
     * @var string
     */
    public $registryType;

    /**
     * @description The ID of the service. This parameter is deprecated. You can ignore it.
     *
     * @example com.alibabacloud.hipstershop.CartService
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The name of the service.
     *
     * @example com.alibabacloud.hipstershop.CartService
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The type of the service. Valid values:
     *
     *   dubbo
     *   springCloud
     *   hsf
     *   istio
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
        'appId'          => 'appId',
        'group'          => 'group',
        'ip'             => 'ip',
        'namespace'      => 'namespace',
        'origin'         => 'origin',
        'region'         => 'region',
        'registryType'   => 'registryType',
        'serviceId'      => 'serviceId',
        'serviceName'    => 'serviceName',
        'serviceType'    => 'serviceType',
        'serviceVersion' => 'serviceVersion',
        'source'         => 'source',
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
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->origin) {
            $res['origin'] = $this->origin;
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
     * @return GetServiceDetailRequest
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
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['origin'])) {
            $model->origin = $map['origin'];
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
