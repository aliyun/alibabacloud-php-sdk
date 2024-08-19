<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class CreatStockOssCheckTaskRequest extends Model
{
    /**
     * @example [{\\"Bucket\\":\\"bucket01-test\\",\\"Region\\":\\"cn-beijing\\"}]
     *
     * @var string
     */
    public $buckets;

    /**
     * @example 1751
     *
     * @var string
     */
    public $callbackId;

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
     * @example 1
     *
     * @var int
     */
    public $executeDate;

    /**
     * @example 01:09:30-01:19:30
     *
     * @var string
     */
    public $executeTime;

    /**
     * @var bool
     */
    public $freeze;

    /**
     * @var bool
     */
    public $freezeHighRisk1;

    /**
     * @var bool
     */
    public $freezeHighRisk2;

    /**
     * @var bool
     */
    public $freezeMediumRisk1;

    /**
     * @var bool
     */
    public $freezeMediumRisk2;

    /**
     * @var string
     */
    public $freezeType;

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
     * @example 0
     *
     * @var string
     */
    public $scanResourceType;

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
     * @example 0
     *
     * @var int
     */
    public $taskCycle;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @example batch
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'buckets'              => 'Buckets',
        'callbackId'           => 'CallbackId',
        'distinctHistoryTasks' => 'DistinctHistoryTasks',
        'endTime'              => 'EndTime',
        'executeDate'          => 'ExecuteDate',
        'executeTime'          => 'ExecuteTime',
        'freeze'               => 'Freeze',
        'freezeHighRisk1'      => 'FreezeHighRisk1',
        'freezeHighRisk2'      => 'FreezeHighRisk2',
        'freezeMediumRisk1'    => 'FreezeMediumRisk1',
        'freezeMediumRisk2'    => 'FreezeMediumRisk2',
        'freezeType'           => 'FreezeType',
        'isInc'                => 'IsInc',
        'mediaType'            => 'MediaType',
        'prefixFilterType'     => 'PrefixFilterType',
        'prefixFilters'        => 'PrefixFilters',
        'priority'             => 'Priority',
        'regionId'             => 'RegionId',
        'scanLimit'            => 'ScanLimit',
        'scanNoFileType'       => 'ScanNoFileType',
        'scanResourceType'     => 'ScanResourceType',
        'scanService'          => 'ScanService',
        'startTime'            => 'StartTime',
        'taskCycle'            => 'TaskCycle',
        'taskName'             => 'TaskName',
        'taskType'             => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buckets) {
            $res['Buckets'] = $this->buckets;
        }
        if (null !== $this->callbackId) {
            $res['CallbackId'] = $this->callbackId;
        }
        if (null !== $this->distinctHistoryTasks) {
            $res['DistinctHistoryTasks'] = $this->distinctHistoryTasks;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executeDate) {
            $res['ExecuteDate'] = $this->executeDate;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->freeze) {
            $res['Freeze'] = $this->freeze;
        }
        if (null !== $this->freezeHighRisk1) {
            $res['FreezeHighRisk1'] = $this->freezeHighRisk1;
        }
        if (null !== $this->freezeHighRisk2) {
            $res['FreezeHighRisk2'] = $this->freezeHighRisk2;
        }
        if (null !== $this->freezeMediumRisk1) {
            $res['FreezeMediumRisk1'] = $this->freezeMediumRisk1;
        }
        if (null !== $this->freezeMediumRisk2) {
            $res['FreezeMediumRisk2'] = $this->freezeMediumRisk2;
        }
        if (null !== $this->freezeType) {
            $res['FreezeType'] = $this->freezeType;
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
        if (null !== $this->scanResourceType) {
            $res['ScanResourceType'] = $this->scanResourceType;
        }
        if (null !== $this->scanService) {
            $res['ScanService'] = $this->scanService;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskCycle) {
            $res['TaskCycle'] = $this->taskCycle;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatStockOssCheckTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Buckets'])) {
            $model->buckets = $map['Buckets'];
        }
        if (isset($map['CallbackId'])) {
            $model->callbackId = $map['CallbackId'];
        }
        if (isset($map['DistinctHistoryTasks'])) {
            $model->distinctHistoryTasks = $map['DistinctHistoryTasks'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecuteDate'])) {
            $model->executeDate = $map['ExecuteDate'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['Freeze'])) {
            $model->freeze = $map['Freeze'];
        }
        if (isset($map['FreezeHighRisk1'])) {
            $model->freezeHighRisk1 = $map['FreezeHighRisk1'];
        }
        if (isset($map['FreezeHighRisk2'])) {
            $model->freezeHighRisk2 = $map['FreezeHighRisk2'];
        }
        if (isset($map['FreezeMediumRisk1'])) {
            $model->freezeMediumRisk1 = $map['FreezeMediumRisk1'];
        }
        if (isset($map['FreezeMediumRisk2'])) {
            $model->freezeMediumRisk2 = $map['FreezeMediumRisk2'];
        }
        if (isset($map['FreezeType'])) {
            $model->freezeType = $map['FreezeType'];
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
        if (isset($map['ScanResourceType'])) {
            $model->scanResourceType = $map['ScanResourceType'];
        }
        if (isset($map['ScanService'])) {
            $model->scanService = $map['ScanService'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskCycle'])) {
            $model->taskCycle = $map['TaskCycle'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
