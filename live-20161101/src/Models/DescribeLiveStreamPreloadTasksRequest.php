<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveStreamPreloadTasksRequest extends Model
{
    /**
     * @description The streaming domain name.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. Example: 2016-06-30T19:00:00Z. The interval between the start time and end time cannot exceed three days.
     *
     * @example 2016-06-30T19:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries per page. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The streaming URL. You can specify up to 100 streaming URLs in a request. Separate multiple streaming URLs with commas (,).
     *
     * @var string
     */
    public $playUrl;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. Example: 2016-06-29T19:00:00Z. You can query only data in the previous three days.
     *
     * @example 2016-06-29T19:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the prefetch task. Valid values:
     *
     *   complete
     *   pending
     *   preloading
     *   failed
     *
     * @example complete
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the prefetch task. The task ID is returned when you call the [SetLiveStreamPreloadTasks](https://help.aliyun.com/document_detail/2519938.html) operation to configure the prefetch task.
     *
     * @example yourTaskId
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'ownerId' => 'OwnerId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'playUrl' => 'PlayUrl',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->playUrl) {
            $res['PlayUrl'] = $this->playUrl;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamPreloadTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['PlayUrl'])) {
            $model->playUrl = $map['PlayUrl'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
