<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class CreatePreCheckRequest extends Model
{
    /**
     * @example [{\\"Bucket\\":\\"bucket01-test\\",\\"Region\\":\\"cn-beijing\\"}]
     *
     * @var string
     */
    public $buckets;

    /**
     * @example true
     *
     * @var bool
     */
    public $distinctHistoryTasks;

    /**
     * @example 2023-12-18 10:08:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $isInc;

    /**
     * @example 1
     *
     * @var int
     */
    public $mediaType;

    /**
     * @example all
     *
     * @var string
     */
    public $prefixFilterType;

    /**
     * @example dir1,dir2
     *
     * @var string
     */
    public $prefixFilters;

    /**
     * @example 0
     *
     * @var int
     */
    public $priority;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 10
     *
     * @var int
     */
    public $scanLimit;

    /**
     * @example true
     *
     * @var bool
     */
    public $scanNoFileType;

    /**
     * @example baselineCheck
     *
     * @var string
     */
    public $scanService;

    /**
     * @example 2023-12-17 10:08:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'buckets' => 'Buckets',
        'distinctHistoryTasks' => 'DistinctHistoryTasks',
        'endTime' => 'EndTime',
        'isInc' => 'IsInc',
        'mediaType' => 'MediaType',
        'prefixFilterType' => 'PrefixFilterType',
        'prefixFilters' => 'PrefixFilters',
        'priority' => 'Priority',
        'regionId' => 'RegionId',
        'scanLimit' => 'ScanLimit',
        'scanNoFileType' => 'ScanNoFileType',
        'scanService' => 'ScanService',
        'startTime' => 'StartTime',
        'taskName' => 'TaskName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->buckets) {
            $res['Buckets'] = $this->buckets;
        }
        if (null !== $this->distinctHistoryTasks) {
            $res['DistinctHistoryTasks'] = $this->distinctHistoryTasks;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->isInc) {
            $res['IsInc'] = $this->isInc;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->prefixFilterType) {
            $res['PrefixFilterType'] = $this->prefixFilterType;
        }
        if (null !== $this->prefixFilters) {
            $res['PrefixFilters'] = $this->prefixFilters;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scanLimit) {
            $res['ScanLimit'] = $this->scanLimit;
        }
        if (null !== $this->scanNoFileType) {
            $res['ScanNoFileType'] = $this->scanNoFileType;
        }
        if (null !== $this->scanService) {
            $res['ScanService'] = $this->scanService;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePreCheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Buckets'])) {
            $model->buckets = $map['Buckets'];
        }
        if (isset($map['DistinctHistoryTasks'])) {
            $model->distinctHistoryTasks = $map['DistinctHistoryTasks'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IsInc'])) {
            $model->isInc = $map['IsInc'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['PrefixFilterType'])) {
            $model->prefixFilterType = $map['PrefixFilterType'];
        }
        if (isset($map['PrefixFilters'])) {
            $model->prefixFilters = $map['PrefixFilters'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScanLimit'])) {
            $model->scanLimit = $map['ScanLimit'];
        }
        if (isset($map['ScanNoFileType'])) {
            $model->scanNoFileType = $map['ScanNoFileType'];
        }
        if (isset($map['ScanService'])) {
            $model->scanService = $map['ScanService'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
