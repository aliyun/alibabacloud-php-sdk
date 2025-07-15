<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList\inputList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList\outputUrls;
use AlibabaCloud\Tea\Model;

class liveStreamMonitorList extends Model
{
    /**
     * @description The audio source in the layout.
     *
     * @example 1
     *
     * @var int
     */
    public $audioFrom;

    /**
     * @description The callback URL that sends monitoring alerts.
     *
     * @example http://guide.aliyundoc.com/notify
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description The URL of the DingTalk chatbot.
     *
     * @example https://oapi.dingtalk.com/robot/send?access_token=7a7d404056eee1f2fd944ace9bcfc361dc6448583e1d3d3baa****
     *
     * @var string
     */
    public $dingTalkWebHookUrl;

    /**
     * @description The domain name.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The list of monitored input streams.
     *
     * @var inputList[]
     */
    public $inputList;

    /**
     * @description The monitoring alert thresholds. The following fields are included:
     *
     *   fpsLowThres: the video frame rate alert threshold. The value is a floating-point number.
     *   brHighThres: the audio/video bitrate alert threshold. The value is a floating-point number.
     *   eofDurationThresSec: the interruption duration alert threshold. The value is a floating-point number.
     *
     * @example "{\\"fpsLowThres\\": 0.6,\\"brLowThres\\": 1.1,\\"eofDurationThresSec\\": 10}"
     *
     * @var string
     */
    public $monitorConfig;

    /**
     * @description The ID of the monitoring session.
     *
     * @example 445409ec-7eaa-461d-8f29-4bec2eb9****
     *
     * @var string
     */
    public $monitorId;

    /**
     * @description The name of the monitoring session.
     *
     * @example liveMonito****
     *
     * @var string
     */
    public $monitorName;

    /**
     * @description The output resolution template. Valid values:
     *
     *   **lp_ld**: low definition
     *   **lp_sd**: standard definition
     *   **lp_hd**: high definition
     *   **lp_ud**: ultra-high definition
     *
     * @example lp_ud
     *
     * @var string
     */
    public $outputTemplate;

    /**
     * @description The output URLs.
     *
     * @var outputUrls
     */
    public $outputUrls;

    /**
     * @description The ID of the region. Valid values:
     *
     *   cn-shanghai: China (Shanghai)
     *   cn-beijing: China (Beijing)
     *   ap-southeast-1: Singapore
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The start time of live monitoring. The time is displayed in UTC.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the monitoring session. Valid values:
     *
     *   1: Monitoring
     *   0: Unmonitored
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The end time of live monitoring. The time is displayed in UTC.
     *
     * @example 2017-01-11T12:00:00Z
     *
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

    public function validate() {}

    public function toMap()
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
            $res['InputList'] = [];
            if (null !== $this->inputList && \is_array($this->inputList)) {
                $n = 0;
                foreach ($this->inputList as $item) {
                    $res['InputList'][$n++] = null !== $item ? $item->toMap() : $item;
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
                $n = 0;
                foreach ($map['InputList'] as $item) {
                    $model->inputList[$n++] = null !== $item ? inputList::fromMap($item) : $item;
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
