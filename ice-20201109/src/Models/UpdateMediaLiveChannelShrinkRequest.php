<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateMediaLiveChannelShrinkRequest extends Model
{
    /**
     * @description The audio settings.
     *
     * @var string
     */
    public $audioSettingsShrink;

    /**
     * @description The ID of the channel.
     *
     * This parameter is required.
     *
     * @example SEGK5KA6KYKAWQQH
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The inputs associated with the channel.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $inputAttachmentsShrink;

    /**
     * @description The name of the channel. Letters, digits, hyphens (-), and underscores (_) are supported. It can be up to 64 characters in length.
     *
     * This parameter is required.
     *
     * @example mych
     *
     * @var string
     */
    public $name;

    /**
     * @description The output groups.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $outputGroupsShrink;

    /**
     * @description The video settings.
     *
     * @var string
     */
    public $videoSettingsShrink;
    protected $_name = [
        'audioSettingsShrink' => 'AudioSettings',
        'channelId' => 'ChannelId',
        'inputAttachmentsShrink' => 'InputAttachments',
        'name' => 'Name',
        'outputGroupsShrink' => 'OutputGroups',
        'videoSettingsShrink' => 'VideoSettings',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioSettingsShrink) {
            $res['AudioSettings'] = $this->audioSettingsShrink;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->inputAttachmentsShrink) {
            $res['InputAttachments'] = $this->inputAttachmentsShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputGroupsShrink) {
            $res['OutputGroups'] = $this->outputGroupsShrink;
        }
        if (null !== $this->videoSettingsShrink) {
            $res['VideoSettings'] = $this->videoSettingsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMediaLiveChannelShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioSettings'])) {
            $model->audioSettingsShrink = $map['AudioSettings'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['InputAttachments'])) {
            $model->inputAttachmentsShrink = $map['InputAttachments'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OutputGroups'])) {
            $model->outputGroupsShrink = $map['OutputGroups'];
        }
        if (isset($map['VideoSettings'])) {
            $model->videoSettingsShrink = $map['VideoSettings'];
        }

        return $model;
    }
}
