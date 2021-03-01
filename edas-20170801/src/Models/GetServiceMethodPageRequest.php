<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class GetServiceMethodPageRequest extends Model
{
    /**
     * @var string
     */
    public $region;

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
    public $serviceType;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $source;

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
    public $serviceVersion;

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
    public $registryType;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $methodController;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'region'           => 'region',
        'namespace'        => 'namespace',
        'origin'           => 'origin',
        'serviceType'      => 'serviceType',
        'appId'            => 'appId',
        'source'           => 'source',
        'serviceId'        => 'serviceId',
        'serviceName'      => 'serviceName',
        'serviceVersion'   => 'serviceVersion',
        'group'            => 'group',
        'ip'               => 'ip',
        'registryType'     => 'registryType',
        'pageNumber'       => 'pageNumber',
        'pageSize'         => 'pageSize',
        'methodController' => 'methodController',
        'path'             => 'path',
        'name'             => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->origin) {
            $res['origin'] = $this->origin;
        }
        if (null !== $this->serviceType) {
            $res['serviceType'] = $this->serviceType;
        }
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->serviceVersion) {
            $res['serviceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->group) {
            $res['group'] = $this->group;
        }
        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }
        if (null !== $this->registryType) {
            $res['registryType'] = $this->registryType;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->methodController) {
            $res['methodController'] = $this->methodController;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['origin'])) {
            $model->origin = $map['origin'];
        }
        if (isset($map['serviceType'])) {
            $model->serviceType = $map['serviceType'];
        }
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['serviceVersion'])) {
            $model->serviceVersion = $map['serviceVersion'];
        }
        if (isset($map['group'])) {
            $model->group = $map['group'];
        }
        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }
        if (isset($map['registryType'])) {
            $model->registryType = $map['registryType'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['methodController'])) {
            $model->methodController = $map['methodController'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
