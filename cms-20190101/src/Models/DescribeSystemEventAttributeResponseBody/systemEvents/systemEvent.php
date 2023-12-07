<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventAttributeResponseBody\systemEvents;

use AlibabaCloud\Tea\Model;

class systemEvent extends Model
{
    /**
     * @description The details of the system event.
     *
     * @example [{"product":"CloudMonitor","content":"{\"ipGroup\":\"112.126.XX.XX,10.163.XX.XX\",\"tianjimonVersion\":\"1.2.22\"}","groupId":"176,177,178,179,180,692,120812,1663836,96,2028302","time":"1552209568000","resourceId":"acs:ecs:cn-beijing:173651113438****:instance/i-25k35****","level":"CRITICAL","status":"stopped","instanceName":"cmssiteprobebj-6","name":"Agent_Status_Stopped","regionId":"cn-beijing"}]
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the application group.
     *
     * @example 12345
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $id;

    /**
     * @description The name of the instance.
     *
     * @example instanceId1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The level of the system event. Valid values:
     *
     *   CRITICAL: critical
     *   WARN: warning
     *   INFO: information
     *
     * @example WARN
     *
     * @var string
     */
    public $level;

    /**
     * @description The name of the system event.
     *
     * @example Agent_Status_Stopped
     *
     * @var string
     */
    public $name;

    /**
     * @description The abbreviation of the service name.
     *
     * @example CloudMonitor
     *
     * @var string
     */
    public $product;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource.
     *
     * @example xxxxx-1
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The status of the system event.
     *
     * @example normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The timestamp when the system event occurred.
     *
     * Unit: milliseconds.
     * @example 1552199984000
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'content'      => 'Content',
        'groupId'      => 'GroupId',
        'id'           => 'Id',
        'instanceName' => 'InstanceName',
        'level'        => 'Level',
        'name'         => 'Name',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return systemEvent
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
