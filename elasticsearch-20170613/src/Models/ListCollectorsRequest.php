<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListCollectorsRequest extends Model
{
    /**
     * @example es-cn-nif1q8auz0003****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example collectorName1
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example ct-cn-77uqof2s7rg5c****
     *
     * @var string
     */
    public $resId;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example ECS
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'instanceId' => 'instanceId',
        'name'       => 'name',
        'page'       => 'page',
        'resId'      => 'resId',
        'size'       => 'size',
        'sourceType' => 'sourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->resId) {
            $res['resId'] = $this->resId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCollectorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['resId'])) {
            $model->resId = $map['resId'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        return $model;
    }
}
