<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListSwimmingLaneGroupRequest extends Model
{
    /**
     * @description The ID of the lane group.
     *
     * @example 0
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The ID of the namespace.
     *
     * The ID of the default namespace is in the region ID format. Example: cn-beijing.
     * @example cn-shenzhen:publish
     *
     * @var string
     */
    public $logicalRegionId;
    protected $_name = [
        'groupId'         => 'GroupId',
        'logicalRegionId' => 'LogicalRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSwimmingLaneGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }

        return $model;
    }
}
