<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeApplicationResourceSummaryRequest extends Model
{
    /**
     * @description The region level. The value must be of the enumerated data type. Valid values:
     *
     *   **National** (default): Chinese mainland
     *   **Big**: area
     *   **Middle**: province
     *   **Small**: city
     *   **RegionId**: edge node
     *
     * @example National
     *
     * @var string
     */
    public $level;

    /**
     * @description The resource type.
     *
     * Valid value:
     *
     *   Ens
     *
     * @example BareMetal-Arm
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'level'        => 'Level',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicationResourceSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
