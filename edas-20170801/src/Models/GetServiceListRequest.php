<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class GetServiceListRequest extends Model
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
    public $searchType;

    /**
     * @var string
     */
    public $searchValue;

    /**
     * @var string
     */
    public $side;
    protected $_name = [
        'region'      => 'region',
        'namespace'   => 'namespace',
        'origin'      => 'origin',
        'serviceType' => 'serviceType',
        'searchType'  => 'searchType',
        'searchValue' => 'searchValue',
        'side'        => 'side',
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
        if (null !== $this->searchType) {
            $res['searchType'] = $this->searchType;
        }
        if (null !== $this->searchValue) {
            $res['searchValue'] = $this->searchValue;
        }
        if (null !== $this->side) {
            $res['side'] = $this->side;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceListRequest
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
        if (isset($map['searchType'])) {
            $model->searchType = $map['searchType'];
        }
        if (isset($map['searchValue'])) {
            $model->searchValue = $map['searchValue'];
        }
        if (isset($map['side'])) {
            $model->side = $map['side'];
        }

        return $model;
    }
}
