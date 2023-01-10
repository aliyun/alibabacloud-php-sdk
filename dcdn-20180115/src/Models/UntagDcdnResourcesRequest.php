<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class UntagDcdnResourcesRequest extends Model
{
    /**
     * @description Specifies whether to delete all tags. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * Default value: **false**.
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @description The ID of the resource. Valid values of N: **1** to **50**.
     *
     * @example example.com
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The type of the resources from which you want to detach tags. The resource type. Set this value to **DOMAIN**.
     *
     * @example DOMAIN
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The key of a tag. Valid values of N: **1** to **20**.
     *
     * @example env
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
     * @return UntagDcdnResourcesRequest
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
