<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupedTagsRequest extends Model
{
    /**
     * @description The type of the asset to query. If you do not specify this parameter, the tags of all asset types are queried. Valid values:
     *
     *   **ecs**: server
     *   **cloud_product**: Alibaba Cloud service
     *
     * @example ecs
     *
     * @var string
     */
    public $machineTypes;
    protected $_name = [
        'machineTypes' => 'MachineTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = $this->machineTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupedTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MachineTypes'])) {
            $model->machineTypes = $map['MachineTypes'];
        }

        return $model;
    }
}
