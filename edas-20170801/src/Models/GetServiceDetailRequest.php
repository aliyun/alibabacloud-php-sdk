<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class GetServiceDetailRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $registryType;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'appId' => 'appId',
        'group' => 'group',
        'ip' => 'ip',
        'namespace' => 'namespace',
        'origin' => 'origin',
        'region' => 'region',
        'registryType' => 'registryType',
        'serviceId' => 'serviceId',
        'serviceName' => 'serviceName',
        'serviceType' => 'serviceType',
        'serviceVersion' => 'serviceVersion',
        'source' => 'source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
