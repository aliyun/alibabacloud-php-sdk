<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateSyntheticTaskShrinkRequest extends Model
{
    /**
     * @description The common parameters.
     *
     * @var string
     */
    public $commonParamShrink;

    /**
     * @description The file download task.
     *
     * @var string
     */
    public $downloadShrink;

    /**
     * @description The frequency.
     *
     * @var string
     */
    public $extendIntervalShrink;

    /**
     * @description The interval at which synthetic monitoring is performed. Unit: minutes. Valid values:
     *
     *   1
     *   5
     *   10
     *   15
     *   20
     *   30
     *   60
     *   120
     *   180
     *   240
     *   360
     *   480
     *   720
     *   1440
     *
     * This parameter is required.
     * @example 5
     *
     * @var string
     */
    public $intervalTime;

    /**
     * @description The interval type.
     *
     *   0: daily
     *   1: custom frequency
     *
     * This parameter is required.
     * @example 0
     *
     * @var string
     */
    public $intervalType;

    /**
     * @description The IP address type:
     *
     *   0: an automatic IP address
     *   1: IPv4
     *   2: IPv6
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $ipType;

    /**
     * @description The list of monitoring points.
     *
     * This parameter is required.
     * @var string
     */
    public $monitorListShrink;

    /**
     * @description The monitoring items that are associated with the browse tasks.
     *
     * @var string
     */
    public $navigationShrink;

    /**
     * @description The network synthetic monitoring task.
     *
     * @var string
     */
    public $netShrink;

    /**
     * @description The API performance synthetic monitoring task.
     *
     * @var string
     */
    public $protocolShrink;

    /**
     * @description The ID of the region in which the application is located.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the task. To update a synthetic monitoring task, enter the task name and set the **UpdateTask** parameter to **true**.
     *
     * This parameter is required.
     * @example Network synthetic monitoring task
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the monitoring task. Valid values:
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $taskType;

    /**
     * @description Specifies whether to update existing synthetic monitoring tasks.
     *
     *   true: updates existing synthetic monitoring tasks.
     *   false: creates new synthetic monitoring tasks.
     *
     * @example false
     *
     * @var bool
     */
    public $updateTask;

    /**
     * @description The URL for synthetic monitoring.
     *
     * This parameter is required.
     * @example https://www.example.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'commonParamShrink'    => 'CommonParam',
        'downloadShrink'       => 'Download',
        'extendIntervalShrink' => 'ExtendInterval',
        'intervalTime'         => 'IntervalTime',
        'intervalType'         => 'IntervalType',
        'ipType'               => 'IpType',
        'monitorListShrink'    => 'MonitorList',
        'navigationShrink'     => 'Navigation',
        'netShrink'            => 'Net',
        'protocolShrink'       => 'Protocol',
        'regionId'             => 'RegionId',
        'taskName'             => 'TaskName',
        'taskType'             => 'TaskType',
        'updateTask'           => 'UpdateTask',
        'url'                  => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonParamShrink) {
            $res['CommonParam'] = $this->commonParamShrink;
        }
        if (null !== $this->downloadShrink) {
            $res['Download'] = $this->downloadShrink;
        }
        if (null !== $this->extendIntervalShrink) {
            $res['ExtendInterval'] = $this->extendIntervalShrink;
        }
        if (null !== $this->intervalTime) {
            $res['IntervalTime'] = $this->intervalTime;
        }
        if (null !== $this->intervalType) {
            $res['IntervalType'] = $this->intervalType;
        }
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }
        if (null !== $this->monitorListShrink) {
            $res['MonitorList'] = $this->monitorListShrink;
        }
        if (null !== $this->navigationShrink) {
            $res['Navigation'] = $this->navigationShrink;
        }
        if (null !== $this->netShrink) {
            $res['Net'] = $this->netShrink;
        }
        if (null !== $this->protocolShrink) {
            $res['Protocol'] = $this->protocolShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->updateTask) {
            $res['UpdateTask'] = $this->updateTask;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSyntheticTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommonParam'])) {
            $model->commonParamShrink = $map['CommonParam'];
        }
        if (isset($map['Download'])) {
            $model->downloadShrink = $map['Download'];
        }
        if (isset($map['ExtendInterval'])) {
            $model->extendIntervalShrink = $map['ExtendInterval'];
        }
        if (isset($map['IntervalTime'])) {
            $model->intervalTime = $map['IntervalTime'];
        }
        if (isset($map['IntervalType'])) {
            $model->intervalType = $map['IntervalType'];
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }
        if (isset($map['MonitorList'])) {
            $model->monitorListShrink = $map['MonitorList'];
        }
        if (isset($map['Navigation'])) {
            $model->navigationShrink = $map['Navigation'];
        }
        if (isset($map['Net'])) {
            $model->netShrink = $map['Net'];
        }
        if (isset($map['Protocol'])) {
            $model->protocolShrink = $map['Protocol'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['UpdateTask'])) {
            $model->updateTask = $map['UpdateTask'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
