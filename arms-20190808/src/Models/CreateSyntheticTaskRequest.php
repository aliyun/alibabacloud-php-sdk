<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\commonParam;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\download;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\extendInterval;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\monitorList;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\navigation;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\net;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\protocol;
use AlibabaCloud\Tea\Model;

class CreateSyntheticTaskRequest extends Model
{
    /**
     * @description The common parameters.
     *
     * @var commonParam
     */
    public $commonParam;

    /**
     * @description The file download task.
     *
     * @var download
     */
    public $download;

    /**
     * @description The frequency.
     *
     * @var extendInterval
     */
    public $extendInterval;

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
     *
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
     *
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
     *
     * @example 0
     *
     * @var int
     */
    public $ipType;

    /**
     * @description The list of monitoring points.
     *
     * This parameter is required.
     *
     * @var monitorList[]
     */
    public $monitorList;

    /**
     * @description The monitoring items that are associated with the browse tasks.
     *
     * @var navigation
     */
    public $navigation;

    /**
     * @description The network synthetic monitoring task.
     *
     * @var net
     */
    public $net;

    /**
     * @description The API performance synthetic monitoring task.
     *
     * @var protocol
     */
    public $protocol;

    /**
     * @description The ID of the region in which the application is located.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the task. To update a synthetic monitoring task, enter the task name and set the **UpdateTask** parameter to **true**.
     *
     * This parameter is required.
     *
     * @example Network synthetic monitoring task
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the monitoring task. Valid values:
     *
     * 1.  3: web page performance - IE
     * 2.  34: web Page Performance - Chrome
     * 3.  0: network quality
     * 4.  40: file download
     * 5.  7:API performance
     *
     * This parameter is required.
     *
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
     *
     * @example https://www.example.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'commonParam' => 'CommonParam',
        'download' => 'Download',
        'extendInterval' => 'ExtendInterval',
        'intervalTime' => 'IntervalTime',
        'intervalType' => 'IntervalType',
        'ipType' => 'IpType',
        'monitorList' => 'MonitorList',
        'navigation' => 'Navigation',
        'net' => 'Net',
        'protocol' => 'Protocol',
        'regionId' => 'RegionId',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
        'updateTask' => 'UpdateTask',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonParam) {
            $res['CommonParam'] = null !== $this->commonParam ? $this->commonParam->toMap() : null;
        }
        if (null !== $this->download) {
            $res['Download'] = null !== $this->download ? $this->download->toMap() : null;
        }
        if (null !== $this->extendInterval) {
            $res['ExtendInterval'] = null !== $this->extendInterval ? $this->extendInterval->toMap() : null;
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
        if (null !== $this->monitorList) {
            $res['MonitorList'] = [];
            if (null !== $this->monitorList && \is_array($this->monitorList)) {
                $n = 0;
                foreach ($this->monitorList as $item) {
                    $res['MonitorList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->navigation) {
            $res['Navigation'] = null !== $this->navigation ? $this->navigation->toMap() : null;
        }
        if (null !== $this->net) {
            $res['Net'] = null !== $this->net ? $this->net->toMap() : null;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = null !== $this->protocol ? $this->protocol->toMap() : null;
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
     * @return CreateSyntheticTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommonParam'])) {
            $model->commonParam = commonParam::fromMap($map['CommonParam']);
        }
        if (isset($map['Download'])) {
            $model->download = download::fromMap($map['Download']);
        }
        if (isset($map['ExtendInterval'])) {
            $model->extendInterval = extendInterval::fromMap($map['ExtendInterval']);
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
            if (!empty($map['MonitorList'])) {
                $model->monitorList = [];
                $n = 0;
                foreach ($map['MonitorList'] as $item) {
                    $model->monitorList[$n++] = null !== $item ? monitorList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Navigation'])) {
            $model->navigation = navigation::fromMap($map['Navigation']);
        }
        if (isset($map['Net'])) {
            $model->net = net::fromMap($map['Net']);
        }
        if (isset($map['Protocol'])) {
            $model->protocol = protocol::fromMap($map['Protocol']);
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
