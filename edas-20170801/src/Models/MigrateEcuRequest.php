<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class MigrateEcuRequest extends Model
{
    /**
     * @description The ID of the ECS instance. Separate multiple IDs with commas (,).
     *
     * @example i-2zej4i2jdf3ntwhj****
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The ID of the custom namespace.
     *
     *   The ID of a custom namespace is in the `region ID:custom namespace ID` format. Example: cn-beijing:tdy218.
     *   The ID of the default namespace is in the `region ID` format. Example: cn-beijing.
     *
     * @example cn-hangzhou:test_region
     *
     * @var string
     */
    public $logicalRegionId;
    protected $_name = [
        'instanceIds'     => 'InstanceIds',
        'logicalRegionId' => 'LogicalRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrateEcuRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }

        return $model;
    }
}
