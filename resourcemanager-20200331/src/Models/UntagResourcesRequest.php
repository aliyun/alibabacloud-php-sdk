<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all tags from the specified resource groups or members. Valid values:
     *
     *   false (default value)
     *   true
     *
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @description The ID of a resource group or member.
     *
     * You can specify a maximum of 50 IDs.
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The type of the objects from which you want to remove tags. Valid values:
     *
     *   ResourceGroup: resource group. This is the default value.
     *   Account: member.
     *
     * >  This parameter is required if you remove tags from members in a resource directory.
     * @example ResourceGroup
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description A tag key.
     *
     * >  If you set the `All` parameter to `true`, you do not need to configure this parameter.
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
