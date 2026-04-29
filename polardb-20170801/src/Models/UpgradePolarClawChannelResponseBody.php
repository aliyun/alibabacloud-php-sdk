<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UpgradePolarClawChannelResponseBody extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $npmPackage;

    /**
     * @var bool
     */
    public $ok;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var bool
     */
    public $pluginUpgraded;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $restarted;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'channelId' => 'ChannelId',
        'code' => 'Code',
        'message' => 'Message',
        'npmPackage' => 'NpmPackage',
        'ok' => 'Ok',
        'pluginId' => 'PluginId',
        'pluginUpgraded' => 'PluginUpgraded',
        'requestId' => 'RequestId',
        'restarted' => 'Restarted',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->npmPackage) {
            $res['NpmPackage'] = $this->npmPackage;
        }

        if (null !== $this->ok) {
            $res['Ok'] = $this->ok;
        }

        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }

        if (null !== $this->pluginUpgraded) {
            $res['PluginUpgraded'] = $this->pluginUpgraded;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->restarted) {
            $res['Restarted'] = $this->restarted;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NpmPackage'])) {
            $model->npmPackage = $map['NpmPackage'];
        }

        if (isset($map['Ok'])) {
            $model->ok = $map['Ok'];
        }

        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }

        if (isset($map['PluginUpgraded'])) {
            $model->pluginUpgraded = $map['PluginUpgraded'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Restarted'])) {
            $model->restarted = $map['Restarted'];
        }

        return $model;
    }
}
