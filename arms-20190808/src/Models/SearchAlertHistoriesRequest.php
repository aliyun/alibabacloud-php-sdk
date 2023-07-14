<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SearchAlertHistoriesRequest extends Model
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
     *   `1`: a custom alert rule that is used to monitor drill-down data sets
     *   `3`: a custom alert rule that is used to monitor tiled data sets
     *   `4`: an alert rule that is used to monitor web pages, including the default alert rule for browser monitoring
     *   `5`: an alert rule that is used to monitor applications, including the default alert rule for application monitoring
     *   `6`: the default alert rule for browser monitoring
     *   `7`: the default alert rule for application monitoring
     *   `8`: a Tracing Analysis alert rule
     *   `101`: a Prometheus alert rule
     *
     * @example 4
     *
     * @var int
     */
    public $alertType;

    /**
     * @description The number of the page to return. Default value: `1`.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp of the LONG data type. Unit: milliseconds. The default value is the current time.
     *
     * @example 1579499626000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The number of entries to return on each page. Default value: `10`.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region. Default value: `cn-hangzhou`.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp of the LONG data type. Unit: milliseconds. The default value is 10 minutes before the current time.
     *
     * @example 1595568910000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'alertId'     => 'AlertId',
        'alertType'   => 'AlertType',
        'currentPage' => 'CurrentPage',
        'endTime'     => 'EndTime',
        'pageSize'    => 'PageSize',
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return SearchAlertHistoriesRequest
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
