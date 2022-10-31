<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList\inputList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList\outputUrls;
use AlibabaCloud\Tea\Model;

class liveStreamMonitorList extends Model
{
    /**
     * @var int
     */
    public $audioFrom;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var inputList[]
     */
    public $inputList;

    /**
     * @var string
     */
    public $monitorId;

    /**
     * @var string
     */
    public $monitorName;

    /**
     * @var string
     */
    public $outputTemplate;

    /**
     * @var outputUrls
     */
    public $outputUrls;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $stopTime;
    protected $_name = [
        'audioFrom'      => 'AudioFrom',
        'domain'         => 'Domain',
        'inputList'      => 'InputList',
        'monitorId'      => 'MonitorId',
        'monitorName'    => 'MonitorName',
        'outputTemplate' => 'OutputTemplate',
        'outputUrls'     => 'OutputUrls',
        'region'         => 'Region',
        'startTime'      => 'StartTime',
        'status'         => 'Status',
        'stopTime'       => 'StopTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFrom) {
            $res['AudioFrom'] = $this->audioFrom;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->inputList) {
            $res['InputList'] = [];
            if (null !== $this->inputList && \is_array($this->inputList)) {
                $n = 0;
                foreach ($this->inputList as $item) {
                    $res['InputList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->monitorId) {
            $res['MonitorId'] = $this->monitorId;
        }
        if (null !== $this->monitorName) {
            $res['MonitorName'] = $this->monitorName;
        }
        if (null !== $this->outputTemplate) {
            $res['OutputTemplate'] = $this->outputTemplate;
        }
        if (null !== $this->outputUrls) {
            $res['OutputUrls'] = null !== $this->outputUrls ? $this->outputUrls->toMap() : null;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamMonitorList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFrom'])) {
            $model->audioFrom = $map['AudioFrom'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['InputList'])) {
            if (!empty($map['InputList'])) {
                $model->inputList = [];
                $n                = 0;
                foreach ($map['InputList'] as $item) {
                    $model->inputList[$n++] = null !== $item ? inputList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MonitorId'])) {
            $model->monitorId = $map['MonitorId'];
        }
        if (isset($map['MonitorName'])) {
            $model->monitorName = $map['MonitorName'];
        }
        if (isset($map['OutputTemplate'])) {
            $model->outputTemplate = $map['OutputTemplate'];
        }
        if (isset($map['OutputUrls'])) {
            $model->outputUrls = outputUrls::fromMap($map['OutputUrls']);
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }

        return $model;
    }
}
