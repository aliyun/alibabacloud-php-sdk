<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\commonParam;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\download;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\extendInterval;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\monitorList;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\navigation;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\net;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\protocol;

class CreateSyntheticTaskRequest extends Model
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
     * @var string
     */
    public $intervalTime;

    /**
     * @var string
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
     * @var navigation
     */
    public $navigation;

    /**
     * @var net
     */
    public $net;

    /**
     * @var protocol
     */
    public $protocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $taskType;

    /**
     * @var bool
     */
    public $updateTask;

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
        'navigation' => 'Navigation',
        'net' => 'Net',
        'protocol' => 'Protocol',
        'regionId' => 'RegionId',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
        'updateTask' => 'UpdateTask',
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
        if (null !== $this->navigation) {
            $this->navigation->validate();
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

        if (null !== $this->navigation) {
            $res['Navigation'] = null !== $this->navigation ? $this->navigation->toArray($noStream) : $this->navigation;
        }

        if (null !== $this->net) {
            $res['Net'] = null !== $this->net ? $this->net->toArray($noStream) : $this->net;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = null !== $this->protocol ? $this->protocol->toArray($noStream) : $this->protocol;
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
