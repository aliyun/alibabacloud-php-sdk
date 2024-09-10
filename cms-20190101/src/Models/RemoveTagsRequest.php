<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\RemoveTagsRequest\tag;
use AlibabaCloud\Tea\Model;

class RemoveTagsRequest extends Model
{
    /**
     * @description The IDs of the application groups.
     *
     * This parameter is required.
     * @example 12345
     *
     * @var string[]
     */
    public $groupIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The tags.
     *
     * This parameter is required.
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'groupIds' => 'GroupIds',
        'regionId' => 'RegionId',
        'tag'      => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupIds) {
            $res['GroupIds'] = $this->groupIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = $map['GroupIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
