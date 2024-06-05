<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all tags from the file system.
     *
     * Valid values:
     *
     *   true: All tags are removed from the file system. If the file system does not have tags, a success message is returned.
     *   false (default): No tags are removed from the file system and a success message is returned.
     *
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @description The resource IDs. Valid values of N: 1 to 50.
     *
     * This parameter is required.
     * @example 03e08484f0
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The resource type.
     *
     * This parameter is required.
     * @example filesystem
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag keys of the resources. Valid values of N: 1 to 20.
     *
     * @example nastest
     *
     * @var string[]
     */
    public $tagKey;
    protected $_name = [
        'all'          => 'All',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tagKey'       => 'TagKey',
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
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
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
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKey'])) {
            if (!empty($map['TagKey'])) {
                $model->tagKey = $map['TagKey'];
            }
        }

        return $model;
    }
}
