<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesRequest\tags;
use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @description The description of the instance. You can use this description to filter instances. Fuzzy match is supported.
     *
     * @example Havenask instance
     *
     * @var string
     */
    public $description;

    /**
     * @description The Instance type, vector (vector index version),engine (recall engine version)
     *
     * @example vector
     *
     * @var string
     */
    public $edition;

    /**
     * @description The ID of the instance.
     *
     * @example ha-cn-83570439y0n
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 50. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-aekzgpiswzbksdi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tag dictionary.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'description'     => 'description',
        'edition'         => 'edition',
        'instanceId'      => 'instanceId',
        'pageNumber'      => 'pageNumber',
        'pageSize'        => 'pageSize',
        'resourceGroupId' => 'resourceGroupId',
        'tags'            => 'tags',
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
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesRequest
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
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
