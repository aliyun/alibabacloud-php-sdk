<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\TagResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class TagResourcesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description This parameter is required.
     *
     * @example instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description This parameter is required.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'resourceId' => 'resourceId',
        'resourceType' => 'resourceType',
        'tag' => 'tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->tag) {
            $res['tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceId'])) {
            if (!empty($map['resourceId'])) {
                $model->resourceId = $map['resourceId'];
            }
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['tag'])) {
            if (!empty($map['tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
