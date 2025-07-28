<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all tags from the resources. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @description The resource IDs, which are instance names.
     *
     * @var string[]
     */
    public $resourceIds;

    /**
     * @description The type of the resource. valid value:
     *
     * instance: instance
     *
     * @example instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag keys.
     *
     * @var string[]
     */
    public $tagKeys;
    protected $_name = [
        'all' => 'All',
        'resourceIds' => 'ResourceIds',
        'resourceType' => 'ResourceType',
        'tagKeys' => 'TagKeys',
    ];

    public function validate() {}

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
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = $map['ResourceIds'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKeys'])) {
            if (!empty($map['TagKeys'])) {
                $model->tagKeys = $map['TagKeys'];
            }
        }

        return $model;
    }
}
