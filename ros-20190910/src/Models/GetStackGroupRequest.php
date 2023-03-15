<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackGroupRequest extends Model
{
    /**
     * @description The region ID of the stack group. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the stack group.
     *
     * >  You must specify one of the StackGroupName and StackGroupId parameters.
     * @example fd0ddef9-9540-4b42-a464-94f77835****
     *
     * @var string
     */
    public $stackGroupId;

    /**
     * @description The name of the stack group. The name must be unique within a region.
     *
     * >  You must specify one of the StackGroupName and StackGroupId parameters.
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;
    protected $_name = [
        'regionId'       => 'RegionId',
        'stackGroupId'   => 'StackGroupId',
        'stackGroupName' => 'StackGroupName',
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
        if (null !== $this->stackGroupId) {
            $res['StackGroupId'] = $this->stackGroupId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }

        return $model;
    }
}
