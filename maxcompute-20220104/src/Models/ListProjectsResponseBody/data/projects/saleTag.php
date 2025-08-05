<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects;

use AlibabaCloud\Tea\Model;

class saleTag extends Model
{
    /**
     * @description The instance ID of the default computing quota.
     *
     * @example "aaaa-bbbb"
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The billing method of the default computing quota.
     *
     * @example "project"
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceId' => 'resourceId',
        'resourceType' => 'resourceType',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return saleTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
