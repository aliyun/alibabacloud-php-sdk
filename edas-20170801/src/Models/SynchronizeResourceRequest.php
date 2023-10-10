<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class SynchronizeResourceRequest extends Model
{
    /**
     * @description The ID of the resource. This parameter is required only when you set the Type parameter to `ecs`. If you specify multiple IDs, separate them with commas (,). You can synchronize up to 50 resources at a time.
     *
     * @example i-bp17c***5q8x,i-bp1**5q8x
     *
     * @var string
     */
    public $resourceIds;

    /**
     * @description The type of the resource to be synchronized. Valid values: `ecs, slb, vpc, ram, and all`. These values are case-sensitive.
     *
     * @example ecs
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'resourceIds' => 'ResourceIds',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SynchronizeResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
