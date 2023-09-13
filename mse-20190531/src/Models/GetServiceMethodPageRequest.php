<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class GetServiceMethodPageRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example hkhonxxxxx@f3f75ed8ffxxxxx
     *
     * @var string
     */
    public $appId;

    /**
     * @example example-app
     *
     * @var string
     */
    public $appName;

    /**
     * @example 223.5.5.5
     *
     * @var string
     */
    public $ip;

    /**
     * @example com.alibabacloud.mse.demo.a.AController
     *
     * @var string
     */
    public $methodController;

    /**
     * @example aMethod
     *
     * @var string
     */
    public $name;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example /a
     *
     * @var string
     */
    public $path;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $serviceGroup;

    /**
     * @example sc-A
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example springCloud
     *
     * @var string
     */
    public $serviceType;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $serviceVersion;
    protected $_name = [
        'acceptLanguage'   => 'AcceptLanguage',
        'appId'            => 'AppId',
        'appName'          => 'AppName',
        'ip'               => 'Ip',
        'methodController' => 'MethodController',
        'name'             => 'Name',
        'namespace'        => 'Namespace',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'path'             => 'Path',
        'region'           => 'Region',
        'serviceGroup'     => 'ServiceGroup',
        'serviceName'      => 'ServiceName',
        'serviceType'      => 'ServiceType',
        'serviceVersion'   => 'ServiceVersion',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->methodController) {
            $res['MethodController'] = $this->methodController;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->serviceGroup) {
            $res['ServiceGroup'] = $this->serviceGroup;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['MethodController'])) {
            $model->methodController = $map['MethodController'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ServiceGroup'])) {
            $model->serviceGroup = $map['ServiceGroup'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        return $model;
    }
}
