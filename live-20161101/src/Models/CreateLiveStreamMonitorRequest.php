<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateLiveStreamMonitorRequest extends Model
{
    /**
     * @description The name of the application that plays the output streams of the monitoring session.
     *
     * You can specify a name. If you do not specify a name, the system uses **monitor** as the name of the application.
     *
     * @example monitor****
     *
     * @var string
     */
    public $app;

    /**
     * @description Supports input of callback addresses in HTTP(S) format.
     *
     * @example http://guide.aliyundoc.com/notify
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description DingTalk alert monitoring sends alert notifications through a DingTalk group robot. Please set up the DingTalk group robot first and enter the HTTP(S) address of the robot here. For more details, see [Custom Robot Access](https://open.dingtalk.com/document/robots/custom-robot-access).
     * > Configure the custom keyword for the DingTalk group robot as \\"alert\\", otherwise, messages will not be received.
     *
     * @example https://oapi.dingtalk.com/robot/send?access_token=7a7d404056eee1f2fd944ace9bcfc361dc6448583e1d3d3baa****
     *
     * @var string
     */
    public $dingTalkWebHookUrl;

    /**
     * @description The endpoint of the monitoring session.
     *
     * This parameter is required.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The list of input streams to monitor. For more information, see the following **InputConfig** table.
     *
     * This parameter is required.
     *
     * @example InputConfig
     *
     * @var string
     */
    public $inputList;

    /**
     * @description Alarm threshold setting for monitoring, in JSON format. For more details, please refer to the table below for MonitorConfig.
     *
     * @example "{\\"fpsLowThres\\": 0.6,\\"brLowThres\\": 1.1,\\"eofDurationThresSec\\": 10}"
     *
     * @var string
     */
    public $monitorConfig;

    /**
     * @description The name of the monitoring session.
     *
     * This parameter is required.
     *
     * @example liveMonitor****
     *
     * @var string
     */
    public $monitorName;

    /**
     * @description The output template of the monitoring session. Valid values:
     *
     *   **lp_ld**: low definition.
     *   **lp_sd**: standard definition.
     *   **lp_hd**: high definition.
     *   **lp_ud**: ultra high definition.
     *
     * This parameter is required.
     *
     * @example lp_ud
     *
     * @var string
     */
    public $outputTemplate;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the output stream of the monitoring session. If you do not specify a name, the system generates a name at random.
     *
     * @example monitorStream****
     *
     * @var string
     */
    public $stream;
    protected $_name = [
        'app' => 'App',
        'callbackUrl' => 'CallbackUrl',
        'dingTalkWebHookUrl' => 'DingTalkWebHookUrl',
        'domain' => 'Domain',
        'inputList' => 'InputList',
        'monitorConfig' => 'MonitorConfig',
        'monitorName' => 'MonitorName',
        'outputTemplate' => 'OutputTemplate',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'stream' => 'Stream',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
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
            $res['InputList'] = $this->inputList;
        }
        if (null !== $this->monitorConfig) {
            $res['MonitorConfig'] = $this->monitorConfig;
        }
        if (null !== $this->monitorName) {
            $res['MonitorName'] = $this->monitorName;
        }
        if (null !== $this->outputTemplate) {
            $res['OutputTemplate'] = $this->outputTemplate;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLiveStreamMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
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
            $model->inputList = $map['InputList'];
        }
        if (isset($map['MonitorConfig'])) {
            $model->monitorConfig = $map['MonitorConfig'];
        }
        if (isset($map['MonitorName'])) {
            $model->monitorName = $map['MonitorName'];
        }
        if (isset($map['OutputTemplate'])) {
            $model->outputTemplate = $map['OutputTemplate'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        return $model;
    }
}
