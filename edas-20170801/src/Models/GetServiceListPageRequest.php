<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class GetServiceListPageRequest extends Model
{
    /**
     * @description The namespace.
     *
     * @example cn-hangzhou:doc-test
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The source of the data. Valid values:
     *
     *   `agent`: Use this value if you use the service query feature of the latest version to pass the query result.
     *   `registry`: Use this value if you use the service query feature of the earlier version to pass the query result.
     *
     * @example Agent
     *
     * @var string
     */
    public $origin;

    /**
     * @description The number of the page to return. Pages start from Page 0.
     *
     * @example 0
     *
     * @var int
     */
    public $page;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The type of the service. Valid values:
     *
     *   `app`: searches by application.
     *   `service`: searches by service.
     *   `providerIp`: searches by IP address.
     *
     * @example App
     *
     * @var string
     */
    public $searchType;

    /**
     * @description The keyword used for the search.
     *
     *   Set this parameter to the ID of the application if you set the searchType parameter to app.``
     *   Set this parameter to the name of the service if you set the serachType parameter to service.``
     *   Set this parameter to the IP address of the application if you set the searchType parameter to providerIp.
     *
     * @example com.alibaba.edas.HelloService
     *
     * @var string
     */
    public $searchValue;

    /**
     * @description The type of the service. Valid values:
     *
     *   `dubbo`
     *   `springCloud`
     *   `hsf`
     *   `istio`
     *
     * @example SpringCloud
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description Specifies the provider side or the consumer side. Valid values:
     *
     *   provider
     *   consumer
     *
     * @example provider
     *
     * @var string
     */
    public $side;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'namespace'   => 'namespace',
        'origin'      => 'origin',
        'page'        => 'page',
        'region'      => 'region',
        'searchType'  => 'searchType',
        'searchValue' => 'searchValue',
        'serviceType' => 'serviceType',
        'side'        => 'side',
        'size'        => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->origin) {
            $res['origin'] = $this->origin;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->searchType) {
            $res['searchType'] = $this->searchType;
        }
        if (null !== $this->searchValue) {
            $res['searchValue'] = $this->searchValue;
        }
        if (null !== $this->serviceType) {
            $res['serviceType'] = $this->serviceType;
        }
        if (null !== $this->side) {
            $res['side'] = $this->side;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
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
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['origin'])) {
            $model->origin = $map['origin'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['searchType'])) {
            $model->searchType = $map['searchType'];
        }
        if (isset($map['searchValue'])) {
            $model->searchValue = $map['searchValue'];
        }
        if (isset($map['serviceType'])) {
            $model->serviceType = $map['serviceType'];
        }
        if (isset($map['side'])) {
            $model->side = $map['side'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
