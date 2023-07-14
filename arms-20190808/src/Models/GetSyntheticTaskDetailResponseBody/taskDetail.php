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
     * @var commonParam
     */
    public $commonParam;

    /**
     * @description 文件下载任务。
     *
     * @var download
     */
    public $download;

    /**
     * @description 自定义扩展频率。
     *
     * @var extendInterval
     */
    public $extendInterval;

    /**
     * @description 拨测频率，单位为分钟。可选频率如下：
     *
     * - 1440
     * @example 20
     *
     * @var int
     */
    public $intervalTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $intervalType;

    /**
     * @example 0
     *
     * @var int
     */
    public $ipType;

    /**
     * @var monitorList[]
     */
    public $monitorList;

    /**
     * @example 12
     *
     * @var string
     */
    public $monitorListString;

    /**
     * @var nav
     */
    public $nav;

    /**
     * @var net
     */
    public $net;

    /**
     * @var protocol
     */
    public $protocol;

    /**
     * @description 云拨测任务ID。
     *
     * @example 19584
     *
     * @var int
     */
    public $taskId;

    /**
     * @description 任务名称。
     *
     * @example net-test
     *
     * @var string
     */
    public $taskName;

    /**
     * @example 0
     *
     * @var int
     */
    public $taskType;

    /**
     * @description 拨测地址。
     *
     * @example www.example.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'commonParam'       => 'CommonParam',
        'download'          => 'Download',
        'extendInterval'    => 'ExtendInterval',
        'intervalTime'      => 'IntervalTime',
        'intervalType'      => 'IntervalType',
        'ipType'            => 'IpType',
        'monitorList'       => 'MonitorList',
        'monitorListString' => 'MonitorListString',
        'nav'               => 'Nav',
        'net'               => 'Net',
        'protocol'          => 'Protocol',
        'taskId'            => 'TaskId',
        'taskName'          => 'TaskName',
        'taskType'          => 'TaskType',
        'url'               => 'Url',
    ];

    public function validate()
    {
    }

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
                $n                  = 0;
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
