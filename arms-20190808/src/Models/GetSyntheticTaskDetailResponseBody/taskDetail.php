<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\commonParam;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\download;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\extendInterval;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\monitorList;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\nav;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\net;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\protocol;

class taskDetail extends Model
{
    /**
     * @var commonParam
     */
    public $commonParam;

    /**
     * @var download
     */
    public $download;

    /**
     * @var extendInterval
     */
    public $extendInterval;

    /**
     * @var int
     */
    public $intervalTime;

    /**
     * @var int
     */
    public $intervalType;

    /**
     * @var int
     */
    public $ipType;

    /**
     * @var monitorList[]
     */
    public $monitorList;

    /**
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
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $taskType;

    /**
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

    public function validate()
    {
        if (null !== $this->commonParam) {
            $this->commonParam->validate();
        }
        if (null !== $this->download) {
            $this->download->validate();
        }
        if (null !== $this->extendInterval) {
            $this->extendInterval->validate();
        }
        if (\is_array($this->monitorList)) {
            Model::validateArray($this->monitorList);
        }
        if (null !== $this->nav) {
            $this->nav->validate();
        }
        if (null !== $this->net) {
            $this->net->validate();
        }
        if (null !== $this->protocol) {
            $this->protocol->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonParam) {
            $res['CommonParam'] = null !== $this->commonParam ? $this->commonParam->toArray($noStream) : $this->commonParam;
        }

        if (null !== $this->download) {
            $res['Download'] = null !== $this->download ? $this->download->toArray($noStream) : $this->download;
        }

        if (null !== $this->extendInterval) {
            $res['ExtendInterval'] = null !== $this->extendInterval ? $this->extendInterval->toArray($noStream) : $this->extendInterval;
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
            if (\is_array($this->monitorList)) {
                $res['MonitorList'] = [];
                $n1 = 0;
                foreach ($this->monitorList as $item1) {
                    $res['MonitorList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->monitorListString) {
            $res['MonitorListString'] = $this->monitorListString;
        }

        if (null !== $this->nav) {
            $res['Nav'] = null !== $this->nav ? $this->nav->toArray($noStream) : $this->nav;
        }

        if (null !== $this->net) {
            $res['Net'] = null !== $this->net ? $this->net->toArray($noStream) : $this->net;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = null !== $this->protocol ? $this->protocol->toArray($noStream) : $this->protocol;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['MonitorList'] as $item1) {
                    $model->monitorList[$n1] = monitorList::fromMap($item1);
                    ++$n1;
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
