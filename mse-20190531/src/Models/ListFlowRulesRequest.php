<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ListFlowRulesRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the application.
     *
     * @example hkhon1po62@c3df23522******
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example xx-demo
     *
     * @var string
     */
    public $appName;

    /**
     * @description The namespace.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the resource.
     *
     * @example /a
     *
     * @var string
     */
    public $resource;

    /**
     * @description The keyword that is used for the search.
     *
     * @example /a
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
     * @return ListFlowRulesRequest
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
