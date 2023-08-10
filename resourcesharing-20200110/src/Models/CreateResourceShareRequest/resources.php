<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\CreateResourceShareRequest;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The ID of a shared resource.
     *
     * >  `Resources.N.ResourceId` and `Resources.N.ResourceType` must be used in pairs.
     * @example vsw-bp183p93qs667muql****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of a shared resource.
     *
     * >  `Resources.N.ResourceId` and `Resources.N.ResourceType` must be used in pairs.
     * @example VSwitch
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
