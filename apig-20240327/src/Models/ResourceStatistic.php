<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class ResourceStatistic extends Model
{
    /**
     * @var int
     */
    public $resourceCount;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceCount' => 'resourceCount',
        'resourceType' => 'resourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceCount) {
            $res['resourceCount'] = $this->resourceCount;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceStatistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceCount'])) {
            $model->resourceCount = $map['resourceCount'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
