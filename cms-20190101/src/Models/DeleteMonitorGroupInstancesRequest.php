<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteMonitorGroupInstancesRequest extends Model
{
    /**
     * @description The abbreviation of the cloud service name.
     *
     * This parameter is required.
     * @example ecs
     *
     * @var string
     */
    public $category;

    /**
     * @description The ID of the application group.
     *
     * This parameter is required.
     * @example 123456
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The instances to be removed from the application group. Separate multiple instances with commas (,). You can remove a maximum of 20 instances from an application group at a time.
     *
     * This parameter is required.
     * @example i-a2d5q7pm3f912****,i-a2d5q7pm3f222****
     *
     * @var string
     */
    public $instanceIdList;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'category'       => 'Category',
        'groupId'        => 'GroupId',
        'instanceIdList' => 'InstanceIdList',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = $this->instanceIdList;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMonitorGroupInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceIdList'])) {
            $model->instanceIdList = $map['InstanceIdList'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
