<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ApproveOtaTaskRequest extends Model
{
    /**
     * @description The ID of the delivery group. You can call the [ListAppInstanceGroup](https://help.aliyun.com/document_detail/428506.html) operation to obtain the ID.
     *
     * This parameter is required.
     * @example aig-9ciijz60n4xsv****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description The ID of the region where the delivery group resides. You can call the [ListRegions](https://help.aliyun.com/document_detail/428500.html) operation to query the list of regions supported by App Streaming.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @description The type of the OTA update task.
     *
     * Valid values:
     *
     *   Fota: update of the system components of Alibaba Cloud Workspace
     *   AppUpdate
     *   ImageUpdate
     *
     * This parameter is required.
     * @example Fota
     *
     * @var string
     */
    public $otaType;

    /**
     * @description The start time of the OTA update task. The time follows the ISO 8601 standard.
     *
     * Use the UTC time format: yyyy-MM-ddTHH:mmZ
     * @example 2022-08-04T14:36:00+08:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the OTA update task. You can call the [ListAppInstanceGroup](https://help.aliyun.com/document_detail/428506.html) operation to obtain the ID.
     *
     * This parameter is required.
     * @example ota-be7jzm29wrrz5****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'bizRegionId'        => 'BizRegionId',
        'otaType'            => 'OtaType',
        'startTime'          => 'StartTime',
        'taskId'             => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->otaType) {
            $res['OtaType'] = $this->otaType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApproveOtaTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['OtaType'])) {
            $model->otaType = $map['OtaType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
