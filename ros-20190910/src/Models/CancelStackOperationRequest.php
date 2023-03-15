<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class CancelStackOperationRequest extends Model
{
    /**
     * @description test
     *
     * @var string[]
     */
    public $allowedStackOperations;

    /**
     * @description The method that you want to use to cancel the operation. Default value: Safe. Valid values:
     *
     *   Quick: cancels the operation on the stack at the earliest opportunity. In this case, ROS stops scheduling new resources and stops running resources at the earliest opportunity. If you use this method, the resource status may become invalid and subsequent stack operations may be affected.
     *   Safe: cancels the operation on the stack in a secure manner. In this case, ROS stops scheduling new resources and waits for running resources to be stopped.
     *
     * @example Safe
     *
     * @var string
     */
    public $cancelType;

    /**
     * @description The region ID of the stack.
     *
     * You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the stack.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;
    protected $_name = [
        'allowedStackOperations' => 'AllowedStackOperations',
        'cancelType'             => 'CancelType',
        'regionId'               => 'RegionId',
        'stackId'                => 'StackId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedStackOperations) {
            $res['AllowedStackOperations'] = $this->allowedStackOperations;
        }
        if (null !== $this->cancelType) {
            $res['CancelType'] = $this->cancelType;
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
     * @return CancelStackOperationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedStackOperations'])) {
            if (!empty($map['AllowedStackOperations'])) {
                $model->allowedStackOperations = $map['AllowedStackOperations'];
            }
        }
        if (isset($map['CancelType'])) {
            $model->cancelType = $map['CancelType'];
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
