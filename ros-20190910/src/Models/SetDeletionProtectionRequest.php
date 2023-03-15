<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class SetDeletionProtectionRequest extends Model
{
    /**
     * @description Indicates whether stack deletion protection is enabled. Valid values:
     *
     *   Enabled: enables the stack deletion protection.
     *   Disabled (default): Resource stack deletion protection is Disabled. You can use the console or API(DeleteStack) to release the stack resources.
     *
     * >  The deletion of nested stacks is the same as the root stack.
     * @example Enabled
     *
     * @var string
     */
    public $deletionProtection;

    /**
     * @description The region ID of the stack. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the stack.
     *
     * The delete protection attribute of a nested stack is determined by the root stack and remains unchanged from the root stack.
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;
    protected $_name = [
        'deletionProtection' => 'DeletionProtection',
        'regionId'           => 'RegionId',
        'stackId'            => 'StackId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDeletionProtectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
