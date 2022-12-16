<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListTagResourcesRequest extends Model
{
    /**
     * @example 1d2db86sca4384811e0b5e8707e******
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 1
     *
     * @deprecated
     *
     * @var int
     */
    public $page;

    /**
     * @example ["es-cn-aaa","es-cn-bbb"]
     *
     * @var string
     */
    public $resourceIds;

    /**
     * @example INSTANCE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 10
     *
     * @deprecated
     *
     * @var int
     */
    public $size;

    /**
     * @example [{"key":"env","value","dev"},{"key":"dev",  "value":"IT"}]
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'nextToken'    => 'NextToken',
        'page'         => 'Page',
        'resourceIds'  => 'ResourceIds',
        'resourceType' => 'ResourceType',
        'size'         => 'Size',
        'tags'         => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
