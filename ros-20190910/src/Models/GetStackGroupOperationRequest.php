<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackGroupOperationRequest extends Model
{
    /**
     * @description The operation ID. You can call the [ListStackGroupOperations](~~151342~~) operation to query the operation ID.
     *
     * @example 6da106ca-1784-4a6f-a7e1-e723863d****
     *
     * @var string
     */
    public $operationId;

    /**
     * @description The region ID of the stack group. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'operationId' => 'OperationId',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackGroupOperationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
