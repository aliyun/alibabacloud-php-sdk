<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListAlertEventsRequest extends Model
{
    /**
     * @description The name of the alert.
     *
     * @example Test-triggered alert
     *
     * @var string
     */
    public $alertName;

    /**
     * @description The end time of the alert events that you want to query. Specify the time in the YYYY-MM-DD HH:mm:ss format.
     *
     * @example 2021-12-22 23:59:59
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The list of matching conditions.
     *
     * @example [         {           "value": "ARMS_NOTIFICATION",           "key": "clustername",           "operator": "eq"         }       ]     },{       "matchingConditions": [         {           "value": "test",           "key": "alertname",           "operator": "eq"         }       ]
     *
     * @var string
     */
    public $matchingConditions;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description The start time of the alert events that you want to query. Specify the time in the YYYY-MM-DD HH:mm:ss format.
     *
     * @example 2021-12-19 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the alert events. Valid values:
     *
     *   Active
     *   Silenced
     *   Resolved
     *
     * @example Active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'alertName'          => 'AlertName',
        'endTime'            => 'EndTime',
        'matchingConditions' => 'MatchingConditions',
        'page'               => 'Page',
        'size'               => 'Size',
        'startTime'          => 'StartTime',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->matchingConditions) {
            $res['MatchingConditions'] = $this->matchingConditions;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlertEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MatchingConditions'])) {
            $model->matchingConditions = $map['MatchingConditions'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
