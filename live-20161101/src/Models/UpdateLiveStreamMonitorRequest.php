<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class UpdateLiveStreamMonitorRequest extends Model
{
    /**
     * @var string
     */
    public $app;

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
     * @var string
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
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
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
        'monitorId' => 'MonitorId',
        'monitorName' => 'MonitorName',
        'outputTemplate' => 'OutputTemplate',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'stream' => 'Stream',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->monitorId) {
            $res['MonitorId'] = $this->monitorId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['MonitorId'])) {
            $model->monitorId = $map['MonitorId'];
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
