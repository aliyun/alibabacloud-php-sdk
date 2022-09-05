<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\download;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\extendInterval;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\minotorList;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\nav;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\net;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\protocol;
use AlibabaCloud\Tea\Model;

class taskDetail extends Model
{
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
     * @var minotorList[]
     */
    public $minotorList;

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
        'download'       => 'Download',
        'extendInterval' => 'ExtendInterval',
        'intervalTime'   => 'IntervalTime',
        'intervalType'   => 'IntervalType',
        'ipType'         => 'IpType',
        'minotorList'    => 'MinotorList',
        'nav'            => 'Nav',
        'net'            => 'Net',
        'protocol'       => 'Protocol',
        'taskId'         => 'TaskId',
        'taskName'       => 'TaskName',
        'taskType'       => 'TaskType',
        'url'            => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->minotorList) {
            $res['MinotorList'] = [];
            if (null !== $this->minotorList && \is_array($this->minotorList)) {
                $n = 0;
                foreach ($this->minotorList as $item) {
                    $res['MinotorList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['MinotorList'])) {
            if (!empty($map['MinotorList'])) {
                $model->minotorList = [];
                $n                  = 0;
                foreach ($map['MinotorList'] as $item) {
                    $model->minotorList[$n++] = null !== $item ? minotorList::fromMap($item) : $item;
                }
            }
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
