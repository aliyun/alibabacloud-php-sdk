<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesShrinkRequest extends Model
{
    /**
     * @description The description of the instance
     *
     * @example The product code
     *
     * @var string
     */
    public $description;

    /**
     * @description 实例类型，vector(向量索引版)，engine(召回引擎版)
     *
     * @example vector
     *
     * @var string
     */
    public $edition;

    /**
     * @description The time when the instance was created
     *
     * @example ha-cn-83570439y0n
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the instance
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The description of the instance. You can use this description to filter instances. Fuzzy match is supported.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example rg-aekzgpiswzbksdi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'description'     => 'description',
        'edition'         => 'edition',
        'instanceId'      => 'instanceId',
        'pageNumber'      => 'pageNumber',
        'pageSize'        => 'pageSize',
        'resourceGroupId' => 'resourceGroupId',
        'tagsShrink'      => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->edition) {
            $res['edition'] = $this->edition;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tagsShrink) {
            $res['tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['edition'])) {
            $model->edition = $map['edition'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['tags'])) {
            $model->tagsShrink = $map['tags'];
        }

        return $model;
    }
}
