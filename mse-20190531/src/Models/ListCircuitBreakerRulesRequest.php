<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ListCircuitBreakerRulesRequest extends Model
{
    /**
     * @description The language of the response. Valid values: zh-CN and en-US. Default value: zh-CN. The value zh-CN indicates Chinese, and the value en-US indicates English.
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the application.
     *
     * @example hkhon1po62@c3df23522bXXXXX
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * This parameter is required.
     * @example spring-cloud-a
     *
     * @var string
     */
    public $appName;

    /**
     * @description The microservice namespace to which the application belongs.
     *
     * This parameter is required.
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The start page of the returned pages. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @description The number of entries per page. Default value: 6.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is used for exact match of circuit breaking rules.
     *
     * @example /a
     *
     * @var string
     */
    public $resource;

    /**
     * @description This parameter is used for fuzzy match of circuit breaking rules.
     *
     * @example a
     *
     * @var string
     */
    public $resourceSearchKey;
    protected $_name = [
        'acceptLanguage'    => 'AcceptLanguage',
        'appId'             => 'AppId',
        'appName'           => 'AppName',
        'namespace'         => 'Namespace',
        'pageIndex'         => 'PageIndex',
        'pageSize'          => 'PageSize',
        'resource'          => 'Resource',
        'resourceSearchKey' => 'ResourceSearchKey',
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
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->resourceSearchKey) {
            $res['ResourceSearchKey'] = $this->resourceSearchKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCircuitBreakerRulesRequest
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
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['ResourceSearchKey'])) {
            $model->resourceSearchKey = $map['ResourceSearchKey'];
        }

        return $model;
    }
}
