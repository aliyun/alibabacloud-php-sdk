<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList\inputList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList\outputUrls;

class liveStreamMonitorList extends Model
{
    /**
     * @var int
     */
    public $audioFrom;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $dingTalkWebHookUrl;

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
    public $monitorConfig;

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
        'audioFrom' => 'AudioFrom',
        'callbackUrl' => 'CallbackUrl',
        'dingTalkWebHookUrl' => 'DingTalkWebHookUrl',
        'domain' => 'Domain',
        'inputList' => 'InputList',
        'monitorConfig' => 'MonitorConfig',
        'monitorId' => 'MonitorId',
        'monitorName' => 'MonitorName',
        'outputTemplate' => 'OutputTemplate',
        'outputUrls' => 'OutputUrls',
        'region' => 'Region',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'stopTime' => 'StopTime',
    ];

    public function validate()
    {
        if (\is_array($this->inputList)) {
            Model::validateArray($this->inputList);
        }
        if (null !== $this->outputUrls) {
            $this->outputUrls->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioFrom) {
            $res['AudioFrom'] = $this->audioFrom;
        }

        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->dingTalkWebHookUrl) {
            $res['DingTalkWebHookUrl'] = $this->dingTalkWebHookUrl;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->inputList) {
            if (\is_array($this->inputList)) {
                $res['InputList'] = [];
                $n1 = 0;
                foreach ($this->inputList as $item1) {
                    $res['InputList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->monitorConfig) {
            $res['MonitorConfig'] = $this->monitorConfig;
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
            $res['OutputUrls'] = null !== $this->outputUrls ? $this->outputUrls->toArray($noStream) : $this->outputUrls;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFrom'])) {
            $model->audioFrom = $map['AudioFrom'];
        }

        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['DingTalkWebHookUrl'])) {
            $model->dingTalkWebHookUrl = $map['DingTalkWebHookUrl'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['InputList'])) {
            if (!empty($map['InputList'])) {
                $model->inputList = [];
                $n1 = 0;
                foreach ($map['InputList'] as $item1) {
                    $model->inputList[$n1] = inputList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MonitorConfig'])) {
            $model->monitorConfig = $map['MonitorConfig'];
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
