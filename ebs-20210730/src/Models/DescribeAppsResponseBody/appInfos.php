<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeAppsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeAppsResponseBody\appInfos\appTags;

class appInfos extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var appTags[]
     */
    public $appTags;

    /**
     * @var bool
     */
    public $default;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $eventBridgeSendEnabled;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var bool
     */
    public $monitorSendEnabled;

    /**
     * @var bool
     */
    public $reportSendEnabled;

    /**
     * @var bool
     */
    public $slsSendEnabled;

    /**
     * @var string
     */
    public $subscribePeriod;

    /**
     * @var string
     */
    public $subscribeStatus;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appTags' => 'AppTags',
        'default' => 'Default',
        'description' => 'Description',
        'eventBridgeSendEnabled' => 'EventBridgeSendEnabled',
        'modifyTime' => 'ModifyTime',
        'monitorSendEnabled' => 'MonitorSendEnabled',
        'reportSendEnabled' => 'ReportSendEnabled',
        'slsSendEnabled' => 'SlsSendEnabled',
        'subscribePeriod' => 'SubscribePeriod',
        'subscribeStatus' => 'SubscribeStatus',
    ];

    public function validate()
    {
        if (\is_array($this->appTags)) {
            Model::validateArray($this->appTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appTags) {
            if (\is_array($this->appTags)) {
                $res['AppTags'] = [];
                $n1 = 0;
                foreach ($this->appTags as $item1) {
                    $res['AppTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->default) {
            $res['Default'] = $this->default;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->eventBridgeSendEnabled) {
            $res['EventBridgeSendEnabled'] = $this->eventBridgeSendEnabled;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->monitorSendEnabled) {
            $res['MonitorSendEnabled'] = $this->monitorSendEnabled;
        }

        if (null !== $this->reportSendEnabled) {
            $res['ReportSendEnabled'] = $this->reportSendEnabled;
        }

        if (null !== $this->slsSendEnabled) {
            $res['SlsSendEnabled'] = $this->slsSendEnabled;
        }

        if (null !== $this->subscribePeriod) {
            $res['SubscribePeriod'] = $this->subscribePeriod;
        }

        if (null !== $this->subscribeStatus) {
            $res['SubscribeStatus'] = $this->subscribeStatus;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppTags'])) {
            if (!empty($map['AppTags'])) {
                $model->appTags = [];
                $n1 = 0;
                foreach ($map['AppTags'] as $item1) {
                    $model->appTags[$n1] = appTags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Default'])) {
            $model->default = $map['Default'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EventBridgeSendEnabled'])) {
            $model->eventBridgeSendEnabled = $map['EventBridgeSendEnabled'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['MonitorSendEnabled'])) {
            $model->monitorSendEnabled = $map['MonitorSendEnabled'];
        }

        if (isset($map['ReportSendEnabled'])) {
            $model->reportSendEnabled = $map['ReportSendEnabled'];
        }

        if (isset($map['SlsSendEnabled'])) {
            $model->slsSendEnabled = $map['SlsSendEnabled'];
        }

        if (isset($map['SubscribePeriod'])) {
            $model->subscribePeriod = $map['SubscribePeriod'];
        }

        if (isset($map['SubscribeStatus'])) {
            $model->subscribeStatus = $map['SubscribeStatus'];
        }

        return $model;
    }
}
