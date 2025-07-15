<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveStreamMonitorListRequest extends Model
{
    /**
     * @description The ID of the monitoring session.
     *
     * >  You can obtain the monitoring session ID from the response parameter MonitorId of the [CreateLiveStreamMonitor](https://help.aliyun.com/document_detail/2848129.html) operation. If you leave this parameter empty, the data of all monitoring sessions is returned.
     *
     * @example 445409ec-7eaa-461d-8f29-4bec2eb9****
     *
     * @var string
     */
    public $monitorId;

    /**
     * @description The sorting order of monitoring sessions. Valid values:
     *
     *   0: Monitoring sessions are sorted by status.
     *   1: Monitoring sessions are sorted by start time in descending order.
     *   2: Monitoring sessions are sorted by start time in ascending order.
     *
     * @example 1
     *
     * @var int
     */
    public $orderRule;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number.
     *
     * @example 2
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of monitoring sessions to return per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the monitoring session. Valid values:
     *
     *   1: Monitoring
     *   0: Unmonitored
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'monitorId' => 'MonitorId',
        'orderRule' => 'OrderRule',
        'ownerId' => 'OwnerId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorId) {
            $res['MonitorId'] = $this->monitorId;
        }
        if (null !== $this->orderRule) {
            $res['OrderRule'] = $this->orderRule;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamMonitorListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorId'])) {
            $model->monitorId = $map['MonitorId'];
        }
        if (isset($map['OrderRule'])) {
            $model->orderRule = $map['OrderRule'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
