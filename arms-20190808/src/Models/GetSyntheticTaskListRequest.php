<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetSyntheticTaskListRequest extends Model
{
    /**
     * @description The order by which the queried tasks are sorted. Valid values:
     *
     *   **asc**: ascending
     *   **desc**: descending
     *
     * @example asc
     *
     * @var string
     */
    public $direction;

    /**
     * @description The condition by which the queried tasks are sorted.
     *
     * @example CreateTime
     *
     * @var string
     */
    public $order;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID. Default value: **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The task name.
     *
     * @example net-test
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The status of the task. Valid values:
     *
     *   **0**: The task is stopped.
     *   **1**: The task is started.
     *   **9**: The task is ended.
     *
     * @example 1
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The type of the task. Valid values:
     *
     * 1.  3: web page performance - IE
     * 2.  34: web page performance - Chrome
     * 3.  0: network quality
     * 4.  40: file download
     * 5.  7: API performance
     *
     * @example 0
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The URL for synthetic monitoring.
     *
     * @example https://www.example.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'direction' => 'Direction',
        'order' => 'Order',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'taskName' => 'TaskName',
        'taskStatus' => 'TaskStatus',
        'taskType' => 'TaskType',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
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
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSyntheticTaskListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
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
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
