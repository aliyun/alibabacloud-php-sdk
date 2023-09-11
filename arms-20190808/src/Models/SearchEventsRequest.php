<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SearchEventsRequest extends Model
{
    /**
     * @description The ID of the alert rule. You can call the SearchAlertRules operation and view the `Id` parameter in the response. For more information, see [SearchAlertRules](~~175825~~).
     *
     * @example 123
     *
     * @var int
     */
    public $alertId;

    /**
     * @description The type of the alert rule. Valid values:
     *
     *   `1`: custom alert rules to monitor drill-down data sets
     *   `3`: custom alert rules to monitor tiled data sets
     *   `4`: alert rules to monitor the frontend, including the default frontend alert rules
     *   `5`: alert rules to monitor applications, including the default application alert rules
     *   `6`: the default frontend alert rules
     *   `7`: the default application alert rules
     *   `8`: Tracing Analysis alert rules
     *   `101`: Prometheus alert rules
     *
     * @example 4
     *
     * @var int
     */
    public $alertType;

    /**
     * @description The type of the application that is associated with the alert rule. Valid values:
     *
     *   `TRACE`: application monitoring
     *   `RETCODE`: frontend monitoring
     *
     * @example TRACE
     *
     * @var string
     */
    public $appType;

    /**
     * @description The number of the page to return. Default value: `1`.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The end of the time range to query. Specify a UNIX timestamp of the LONG data type, in milliseconds. The default value is the current time.
     *
     * @example 1595568970000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description Specifies whether the alert event is triggered. If you do not set this parameter, all alert events are queried. Valid values:
     *
     *   `1`: The event is triggered.
     *   `0`: The event is not triggered.
     *
     * @example 1
     *
     * @var int
     */
    public $isTrigger;

    /**
     * @description The number of entries to return on each page. Default value: `10`.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The process identifier (PID) of the application that is associated with the alert rule.
     *
     * @example atc889zkcf@d8deedfa9bf****
     *
     * @var string
     */
    public $pid;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify a UNIX timestamp of the LONG data type, in milliseconds. The default value is 10 minutes before the current time.
     *
     * @example 1595565300000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'alertId'     => 'AlertId',
        'alertType'   => 'AlertType',
        'appType'     => 'AppType',
        'currentPage' => 'CurrentPage',
        'endTime'     => 'EndTime',
        'isTrigger'   => 'IsTrigger',
        'pageSize'    => 'PageSize',
        'pid'         => 'Pid',
        'regionId'    => 'RegionId',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->isTrigger) {
            $res['IsTrigger'] = $this->isTrigger;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IsTrigger'])) {
            $model->isTrigger = $map['IsTrigger'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
