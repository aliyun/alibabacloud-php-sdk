<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all existing tags from the specified resources. Default value: false. Valid values:
     *
     *   **true**: removes all existing tags from the specified resources.
     *   **false**: does not remove all existing tags from the specified resources.
     *
     * > All existing tags of a resource are removed only if the **tagKeys** parameter is left empty and the **DeleteAll** parameter is set to true.
     * @example true
     *
     * @var bool
     */
    public $deleteAll;

    /**
     * @description The IDs of the resources from which you want to remove tags. You can specify up to 20 IDs.
     *
     * @example ["f5ad6ff7-xxxx-xxxx-xxxx-2axxxx82xxxx"]
     *
     * @var string
     */
    public $resourceIds;

    /**
     * @description The region in which the resource resides.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @description The type of the resource. Valid values:
     *
     *   **application**: Enterprise Distributed Application Service (EDAS) application
     *   **cluster**: EDAS cluster
     *
     * @example application
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tags that you want to remove. You can specify up to 20 tags. Set this parameter to a JSON array.
     *
     * @example ["tagKey1","tagKey2"]
     *
     * @var string
     */
    public $tagKeys;
    protected $_name = [
        'deleteAll'        => 'DeleteAll',
        'resourceIds'      => 'ResourceIds',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType'     => 'ResourceType',
        'tagKeys'          => 'TagKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteAll) {
            $res['DeleteAll'] = $this->deleteAll;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
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
        if (isset($map['DeleteAll'])) {
            $model->deleteAll = $map['DeleteAll'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
        }
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKeys'])) {
            $model->tagKeys = $map['TagKeys'];
        }

        return $model;
    }
}
