<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\audioSettings;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\inputAttachments;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\outputGroups;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\videoSettings;
use AlibabaCloud\Tea\Model;

class UpdateMediaLiveChannelRequest extends Model
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
     * This parameter is required.
     * @example SEGK5KA6KYKAWQQH
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The inputs associated with the channel.
     *
     * This parameter is required.
     * @var inputAttachments[]
     */
    public $inputAttachments;

    /**
     * @description The name of the channel. Letters, digits, hyphens (-), and underscores (_) are supported. It can be up to 64 characters in length.
     *
     * This parameter is required.
     * @example mych
     *
     * @var string
     */
    public $name;

    /**
     * @description The output groups.
     *
     * This parameter is required.
     * @var outputGroups[]
     */
    public $outputGroups;

    /**
     * @description The video settings.
     *
     * @var videoSettings[]
     */
    public $videoSettings;
    protected $_name = [
        'audioSettings'    => 'AudioSettings',
        'channelId'        => 'ChannelId',
        'inputAttachments' => 'InputAttachments',
        'name'             => 'Name',
        'outputGroups'     => 'OutputGroups',
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
        if (null !== $this->inputAttachments) {
            $res['InputAttachments'] = [];
            if (null !== $this->inputAttachments && \is_array($this->inputAttachments)) {
                $n = 0;
                foreach ($this->inputAttachments as $item) {
                    $res['InputAttachments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return UpdateMediaLiveChannelRequest
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
        if (isset($map['InputAttachments'])) {
            if (!empty($map['InputAttachments'])) {
                $model->inputAttachments = [];
                $n                       = 0;
                foreach ($map['InputAttachments'] as $item) {
                    $model->inputAttachments[$n++] = null !== $item ? inputAttachments::fromMap($item) : $item;
                }
            }
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
