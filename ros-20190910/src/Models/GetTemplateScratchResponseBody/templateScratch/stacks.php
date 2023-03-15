<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch;

use AlibabaCloud\Tea\Model;

class stacks extends Model
{
    /**
     * @description The ID of the region to which the stack belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the stack.
     *
     * @example 3708bf6a-3a67-44d4-9eb1-c56704b9****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The purpose of the stack. Valid values:
     *
     *   ResourceImport: resource management
     *   ArchitectureReplication: resource replication
     *
     * @example ArchitectureReplication
     *
     * @var string
     */
    public $usageType;
    protected $_name = [
        'regionId'  => 'RegionId',
        'stackId'   => 'StackId',
        'usageType' => 'UsageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->usageType) {
            $res['UsageType'] = $this->usageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stacks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['UsageType'])) {
            $model->usageType = $map['UsageType'];
        }

        return $model;
    }
}
