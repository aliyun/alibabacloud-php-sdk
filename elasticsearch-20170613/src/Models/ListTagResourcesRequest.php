<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class ListTagResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $resourceIds;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'nextToken' => 'NextToken',
        'page' => 'Page',
        'resourceIds' => 'ResourceIds',
        'resourceType' => 'ResourceType',
        'size' => 'Size',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
