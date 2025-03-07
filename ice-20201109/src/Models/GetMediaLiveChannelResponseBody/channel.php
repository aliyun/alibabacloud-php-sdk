<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\audioSettings;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\inputAttachments;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\outputGroups;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\videoSettings;
use AlibabaCloud\Tea\Model;

class channel extends Model
{
    /**
     * @description The audio settings.
     *
     * @var audioSettings[]
     */
    public $audioSettings;

    /**
     * @description The ID of the channel.
     *
     * @example SEGK5KA6KYKAWQQH
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The time when the channel was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-12-03T06:56:42Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The inputs associated with the channel.
     *
     * @var inputAttachments[]
     */
    public $inputAttachments;

    /**
     * @description The time when the channel was last started. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC. If the channel has never been started since it was created, an empty string is returned.
     *
     * @example 2024-12-03T06:56:42Z
     *
     * @var string
     */
    public $lastStartTime;

    /**
     * @description The time when the channel was last stopped. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC. If the channel has never stopped since it was created, an empty string is returned.
     *
     * @example 2024-12-03T06:56:42Z
     *
     * @var string
     */
    public $lastStopTime;

    /**
     * @description The channel name.
     *
     * @example mych
     *
     * @var string
     */
    public $name;

    /**
     * @description The output groups.
     *
     * @var outputGroups[]
     */
    public $outputGroups;

    /**
     * @description The state of the channel. Valid values: IDLE, STARTING, RUNNING, RECOVERING, and STOPPING.
     *
     * @example IDLE
     *
     * @var string
     */
    public $state;

    /**
     * @description The video settings.
     *
     * @var videoSettings[]
     */
    public $videoSettings;
    protected $_name = [
        'audioSettings'    => 'AudioSettings',
        'channelId'        => 'ChannelId',
        'createTime'       => 'CreateTime',
        'inputAttachments' => 'InputAttachments',
        'lastStartTime'    => 'LastStartTime',
        'lastStopTime'     => 'LastStopTime',
        'name'             => 'Name',
        'outputGroups'     => 'OutputGroups',
        'state'            => 'State',
        'videoSettings'    => 'VideoSettings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioSettings) {
            $res['AudioSettings'] = [];
            if (null !== $this->audioSettings && \is_array($this->audioSettings)) {
                $n = 0;
                foreach ($this->audioSettings as $item) {
                    $res['AudioSettings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->inputAttachments) {
            $res['InputAttachments'] = [];
            if (null !== $this->inputAttachments && \is_array($this->inputAttachments)) {
                $n = 0;
                foreach ($this->inputAttachments as $item) {
                    $res['InputAttachments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lastStartTime) {
            $res['LastStartTime'] = $this->lastStartTime;
        }
        if (null !== $this->lastStopTime) {
            $res['LastStopTime'] = $this->lastStopTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputGroups) {
            $res['OutputGroups'] = [];
            if (null !== $this->outputGroups && \is_array($this->outputGroups)) {
                $n = 0;
                foreach ($this->outputGroups as $item) {
                    $res['OutputGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->videoSettings) {
            $res['VideoSettings'] = [];
            if (null !== $this->videoSettings && \is_array($this->videoSettings)) {
                $n = 0;
                foreach ($this->videoSettings as $item) {
                    $res['VideoSettings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioSettings'])) {
            if (!empty($map['AudioSettings'])) {
                $model->audioSettings = [];
                $n                    = 0;
                foreach ($map['AudioSettings'] as $item) {
                    $model->audioSettings[$n++] = null !== $item ? audioSettings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InputAttachments'])) {
            if (!empty($map['InputAttachments'])) {
                $model->inputAttachments = [];
                $n                       = 0;
                foreach ($map['InputAttachments'] as $item) {
                    $model->inputAttachments[$n++] = null !== $item ? inputAttachments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LastStartTime'])) {
            $model->lastStartTime = $map['LastStartTime'];
        }
        if (isset($map['LastStopTime'])) {
            $model->lastStopTime = $map['LastStopTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OutputGroups'])) {
            if (!empty($map['OutputGroups'])) {
                $model->outputGroups = [];
                $n                   = 0;
                foreach ($map['OutputGroups'] as $item) {
                    $model->outputGroups[$n++] = null !== $item ? outputGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['VideoSettings'])) {
            if (!empty($map['VideoSettings'])) {
                $model->videoSettings = [];
                $n                    = 0;
                foreach ($map['VideoSettings'] as $item) {
                    $model->videoSettings[$n++] = null !== $item ? videoSettings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
