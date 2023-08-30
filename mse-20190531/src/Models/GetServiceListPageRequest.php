<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class GetServiceListPageRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example dez4xxxxx@f3f75ed8ffxxxxx
     *
     * @var string
     */
    public $appId;

    /**
     * @example 223.5.5.5
     *
     * @var string
     */
    public $ip;

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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

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
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appId'          => 'AppId',
        'ip'             => 'Ip',
        'namespace'      => 'Namespace',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'region'         => 'Region',
        'serviceName'    => 'ServiceName',
        'serviceType'    => 'ServiceType',
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
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceListPageRequest
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
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        return $model;
    }
}
