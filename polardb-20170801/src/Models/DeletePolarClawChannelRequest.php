<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DeletePolarClawChannelRequest extends Model
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
     * @var string
     */
    public $pluginId;

    /**
     * @var bool
     */
    public $restart;

    /**
     * @var bool
     */
    public $uninstallPlugin;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'channelId' => 'ChannelId',
        'pluginId' => 'PluginId',
        'restart' => 'Restart',
        'uninstallPlugin' => 'UninstallPlugin',
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

        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }

        if (null !== $this->restart) {
            $res['Restart'] = $this->restart;
        }

        if (null !== $this->uninstallPlugin) {
            $res['UninstallPlugin'] = $this->uninstallPlugin;
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

        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }

        if (isset($map['Restart'])) {
            $model->restart = $map['Restart'];
        }

        if (isset($map['UninstallPlugin'])) {
            $model->uninstallPlugin = $map['UninstallPlugin'];
        }

        return $model;
    }
}
