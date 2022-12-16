<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @example ["es-cn-09k1rocex0006****","es-cn-oew1rgiev0009****"]
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
     * @example ["tagKey1","tagKey2"]
     *
     * @var string
     */
    public $tagKeys;

    /**
     * @var string
     */
    public $body;
    protected $_name = [
        'all'          => 'All',
        'resourceIds'  => 'ResourceIds',
        'resourceType' => 'ResourceType',
        'tagKeys'      => 'TagKeys',
        'body'         => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKeys) {
            $res['TagKeys'] = $this->tagKeys;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKeys'])) {
            $model->tagKeys = $map['TagKeys'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
