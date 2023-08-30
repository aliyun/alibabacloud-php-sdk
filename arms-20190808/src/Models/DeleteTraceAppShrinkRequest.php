<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteTraceAppShrinkRequest extends Model
{
    /**
     * @description The ID of the application that you want to delete. You can call the SearchTraceAppByName operation to query the application ID. For more information, see [SearchTraceAppByName](~~130676~~).
     *
     * @example 5406**
     *
     * @var string
     */
    public $appId;

    /**
     * @description The reason(s) to delete application.
     *
     * @var string
     */
    public $deleteReasonShrink;

    /**
     * @description The PID of the application. For more information about how to query the PID, see [QueryMetricByPage](https://www.alibabacloud.com/help/zh/doc-detail/186100.htm?spm=a2cdw.13409063.0.0.7a72281f0bkTfx#title-imy-7gj-qhr).
     *
     * @example 9w0sc5gxxz@edcsd447c2f****
     *
     * @var string
     */
    public $pid;

    /**
     * @description The ID of the region in which the application is located.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the application that you want to delete. You can call the SearchTraceAppByName operation to query the application type. For more information, see [SearchTraceAppByName](~~130676~~). Valid values:
     *
     *   `TRACE`: Application Monitoring
     *   `RETCODE`: frontend monitoring
     *
     * @example TRACE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appId'              => 'AppId',
        'deleteReasonShrink' => 'DeleteReason',
        'pid'                => 'Pid',
        'regionId'           => 'RegionId',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->deleteReasonShrink) {
            $res['DeleteReason'] = $this->deleteReasonShrink;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTraceAppShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DeleteReason'])) {
            $model->deleteReasonShrink = $map['DeleteReason'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
