<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\commonParam;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\download;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\extendInterval;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\monitorList;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\nav;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\net;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\protocol;
use AlibabaCloud\Tea\Model;

class taskDetail extends Model
{
    /**
     * @description The list of common parameters.
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
     * @example 20
     *
     * @var int
     */
    public $intervalTime;

    /**
     * @description The interval type. Valid values:
     *
     *   0: daily
     *   1: custom frequency
     *
     * @example 0
     *
     * @var int
     */
    public $intervalType;

    /**
     * @description The IP version. Valid values:
     *
     *   0: A version is automatically selected.
     *   1: IPv4.
     *   2: IPv6.
     *
     * @example 0
     *
     * @var int
     */
    public $ipType;

    /**
     * @description The detection points.
     *
     * @var monitorList[]
     */
    public $monitorList;

    /**
     * @description The detection points.
     *
     * @example 12
     *
     * @var string
     */
    public $monitorListString;

    /**
     * @description The browser test task.
     *
     * @var nav
     */
    public $nav;

    /**
     * @description The network synthetic monitoring task.
     *
     * @var net
     */
    public $net;

    /**
     * @description The synthetic monitoring task of the API performance type.
     *
     * @var protocol
     */
    public $protocol;

    /**
     * @description The ID of the synthetic monitoring task.
     *
     * @example 19584
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The name of the task.
     *
     * @example net-test
     *
     * @var string
     */
    public $taskName;

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
     * @var int
     */
    public $taskType;

    /**
     * @description The URL for synthetic monitoring.
     *
     * @example www.example.com
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
        'monitorListString' => 'MonitorListString',
        'nav' => 'Nav',
        'net' => 'Net',
        'protocol' => 'Protocol',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
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
        if (null !== $this->monitorListString) {
            $res['MonitorListString'] = $this->monitorListString;
        }
        if (null !== $this->nav) {
            $res['Nav'] = null !== $this->nav ? $this->nav->toMap() : null;
        }
        if (null !== $this->net) {
            $res['Net'] = null !== $this->net ? $this->net->toMap() : null;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = null !== $this->protocol ? $this->protocol->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
     * @return taskDetail
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
        if (isset($map['MonitorListString'])) {
            $model->monitorListString = $map['MonitorListString'];
        }
        if (isset($map['Nav'])) {
            $model->nav = nav::fromMap($map['Nav']);
        }
        if (isset($map['Net'])) {
            $model->net = net::fromMap($map['Net']);
        }
        if (isset($map['Protocol'])) {
            $model->protocol = protocol::fromMap($map['Protocol']);
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
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
