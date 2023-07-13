<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventCountResponseBody\systemEventCounts;

use AlibabaCloud\Tea\Model;

class systemEventCount extends Model
{
    /**
     * @description The ID of the region.
     *
     * @var string
     */
    public $content;

    /**
     * @description The name of the instance.
     *
     * @example 17285****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the resource.
     *
     * @example ECS-test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description This topic provides an example on how to query the number of times that a system event occurred for Elastic Compute Service (`ECS`). The returned result indicates that the number of times that the specified system event occurred is 3.
     *
     * @example Info
     *
     * @var string
     */
    public $level;

    /**
     * @description The level of the system event. Valid values:
     *
     *   Critical
     *   Warn
     *   Info
     *
     * @example Instance:StateChange
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the system event.
     *
     * @example 3
     *
     * @var int
     */
    public $num;

    /**
     * @description The number of times that the system event occurred.
     *
     * @example ECS
     *
     * @var string
     */
    public $product;

    /**
     * @description For more information about common request parameters, see [Common parameters](~~199331~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The description of the system event.
     *
     * @example i-rj99xc6cptkk64ml****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The ID of the application group.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the cloud service in which the system event occurred.
     *
     * @example 1635993751000
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'content'      => 'Content',
        'groupId'      => 'GroupId',
        'instanceName' => 'InstanceName',
        'level'        => 'Level',
        'name'         => 'Name',
        'num'          => 'Num',
        'product'      => 'Product',
        'regionId'     => 'RegionId',
        'resourceId'   => 'ResourceId',
        'status'       => 'Status',
        'time'         => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemEventCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
