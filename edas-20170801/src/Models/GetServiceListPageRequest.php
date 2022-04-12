<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class GetServiceListPageRequest extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $searchType;

    /**
     * @var string
     */
    public $searchValue;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $side;

    /**
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
