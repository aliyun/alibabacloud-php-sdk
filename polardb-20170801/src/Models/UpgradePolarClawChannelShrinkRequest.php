<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UpgradePolarClawChannelShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $channelConfigShrink;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $npmPackage;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var bool
     */
    public $restart;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'channelConfigShrink' => 'ChannelConfig',
        'channelId' => 'ChannelId',
        'npmPackage' => 'NpmPackage',
        'pluginId' => 'PluginId',
        'restart' => 'Restart',
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

        if (null !== $this->channelConfigShrink) {
            $res['ChannelConfig'] = $this->channelConfigShrink;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->npmPackage) {
            $res['NpmPackage'] = $this->npmPackage;
        }

        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }

        if (null !== $this->restart) {
            $res['Restart'] = $this->restart;
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

        if (isset($map['ChannelConfig'])) {
            $model->channelConfigShrink = $map['ChannelConfig'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['NpmPackage'])) {
            $model->npmPackage = $map['NpmPackage'];
        }

        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }

        if (isset($map['Restart'])) {
            $model->restart = $map['Restart'];
        }

        return $model;
    }
}
