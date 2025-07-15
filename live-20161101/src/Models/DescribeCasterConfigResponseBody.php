<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\recordConfig;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\syncGroupsConfig;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\transcodeConfig;
use AlibabaCloud\Tea\Model;

class DescribeCasterConfigResponseBody extends Model
{
    /**
     * @description The configuration for automatic switchover to the standby resource. The `eofThres` field specifies the duration after which the production studio automatically switches to the standby resource if a stream interruption occurs. Unit: seconds.
     *
     * @example {"eofThres":3}
     *
     * @var string
     */
    public $autoSwitchUrgentConfig;

    /**
     * @description Indicates whether the production studio automatically switches to the standby resource in case of a stream interruption.
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $autoSwitchUrgentOn;

    /**
     * @description The callback URL.
     *
     * @example http://learn.aliyundoc.com/callBackLive
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description The ID of the production studio.
     *
     * @example LIVEPRODUCER_POST-cn-0pp1czt****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The name of the production studio.
     *
     * @example coco-caster10
     *
     * @var string
     */
    public $casterName;

    /**
     * @description Indicates whether channels are enabled for the production studio. Valid values:
     *
     *   **0**: Channels are disabled.
     *   **1**: Channels are enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $channelEnable;

    /**
     * @description Indicates whether stream delay is enabled. Unit: seconds.
     *
     *   **0**: Stream delay is disabled.
     *   **A value greater than 0**: Stream delay is enabled.
     *
     * @example 0
     *
     * @var float
     */
    public $delay;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Indicates whether the carousel playback feature is enabled. Valid values:
     *
     *   **0**: The carousel playback feature is disabled.
     *   **1**: The carousel playback feature is enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $programEffect;

    /**
     * @description The name of the playlist for carousel playback.
     *
     * @example program_name
     *
     * @var string
     */
    public $programName;

    /**
     * @description The recording configuration. If this parameter is empty, the recording feature is disabled.
     *
     * @var recordConfig
     */
    public $recordConfig;

    /**
     * @description The ID of the request.
     *
     * @example 97df6b7f-3490-47d2-ac50-8833e1b64597
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The custom stream redirect URL.
     *
     * @example rtmp://sophon-developer.aliyundoc.com/caster/4a82a3d1b7f0462ea37348366201****?auth_key=1608953344-0-0-ac8c628078541d7055a170ec59a5****
     *
     * @var string
     */
    public $sideOutputUrl;

    /**
     * @description The list of custom stream redirect URLs.
     *
     * @example rtmp://sophon-developer.aliyundoc.com/caster/4a82a3d1b7f0462ea37348366201****?auth_key=1608953344-0-0-ac8c628078541d7055a170ec59a5****
     *
     * @var string
     */
    public $sideOutputUrlList;

    /**
     * @description The storage configuration.
     *
     * @var syncGroupsConfig
     */
    public $syncGroupsConfig;

    /**
     * @description The transcoding configuration.
     *
     * @var transcodeConfig
     */
    public $transcodeConfig;

    /**
     * @description Prepared broadcast image media asset ID.
     *
     * @example a089175eb5f4427684fc0715159a****
     *
     * @var string
     */
    public $urgentImageId;

    /**
     * @description URL of the standby image material.
     *
     * @example http://learn.aliyundoc.com/AppName/image.jpg
     *
     * @var string
     */
    public $urgentImageUrl;

    /**
     * @description The URL of the standby live stream.
     *
     * @example rtmp://demo.aliyundoc.com
     *
     * @var string
     */
    public $urgentLiveStreamUrl;

    /**
     * @description The ID of the material that is used as the standby video from the media library.
     *
     * @example 98646538-bcf9-4aef-bd4a-e6bb76588****
     *
     * @var string
     */
    public $urgentMaterialId;
    protected $_name = [
        'autoSwitchUrgentConfig' => 'AutoSwitchUrgentConfig',
        'autoSwitchUrgentOn' => 'AutoSwitchUrgentOn',
        'callbackUrl' => 'CallbackUrl',
        'casterId' => 'CasterId',
        'casterName' => 'CasterName',
        'channelEnable' => 'ChannelEnable',
        'delay' => 'Delay',
        'domainName' => 'DomainName',
        'programEffect' => 'ProgramEffect',
        'programName' => 'ProgramName',
        'recordConfig' => 'RecordConfig',
        'requestId' => 'RequestId',
        'sideOutputUrl' => 'SideOutputUrl',
        'sideOutputUrlList' => 'SideOutputUrlList',
        'syncGroupsConfig' => 'SyncGroupsConfig',
        'transcodeConfig' => 'TranscodeConfig',
        'urgentImageId' => 'UrgentImageId',
        'urgentImageUrl' => 'UrgentImageUrl',
        'urgentLiveStreamUrl' => 'UrgentLiveStreamUrl',
        'urgentMaterialId' => 'UrgentMaterialId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSwitchUrgentConfig) {
            $res['AutoSwitchUrgentConfig'] = $this->autoSwitchUrgentConfig;
        }
        if (null !== $this->autoSwitchUrgentOn) {
            $res['AutoSwitchUrgentOn'] = $this->autoSwitchUrgentOn;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->casterName) {
            $res['CasterName'] = $this->casterName;
        }
        if (null !== $this->channelEnable) {
            $res['ChannelEnable'] = $this->channelEnable;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->programEffect) {
            $res['ProgramEffect'] = $this->programEffect;
        }
        if (null !== $this->programName) {
            $res['ProgramName'] = $this->programName;
        }
        if (null !== $this->recordConfig) {
            $res['RecordConfig'] = null !== $this->recordConfig ? $this->recordConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sideOutputUrl) {
            $res['SideOutputUrl'] = $this->sideOutputUrl;
        }
        if (null !== $this->sideOutputUrlList) {
            $res['SideOutputUrlList'] = $this->sideOutputUrlList;
        }
        if (null !== $this->syncGroupsConfig) {
            $res['SyncGroupsConfig'] = null !== $this->syncGroupsConfig ? $this->syncGroupsConfig->toMap() : null;
        }
        if (null !== $this->transcodeConfig) {
            $res['TranscodeConfig'] = null !== $this->transcodeConfig ? $this->transcodeConfig->toMap() : null;
        }
        if (null !== $this->urgentImageId) {
            $res['UrgentImageId'] = $this->urgentImageId;
        }
        if (null !== $this->urgentImageUrl) {
            $res['UrgentImageUrl'] = $this->urgentImageUrl;
        }
        if (null !== $this->urgentLiveStreamUrl) {
            $res['UrgentLiveStreamUrl'] = $this->urgentLiveStreamUrl;
        }
        if (null !== $this->urgentMaterialId) {
            $res['UrgentMaterialId'] = $this->urgentMaterialId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSwitchUrgentConfig'])) {
            $model->autoSwitchUrgentConfig = $map['AutoSwitchUrgentConfig'];
        }
        if (isset($map['AutoSwitchUrgentOn'])) {
            $model->autoSwitchUrgentOn = $map['AutoSwitchUrgentOn'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['CasterName'])) {
            $model->casterName = $map['CasterName'];
        }
        if (isset($map['ChannelEnable'])) {
            $model->channelEnable = $map['ChannelEnable'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ProgramEffect'])) {
            $model->programEffect = $map['ProgramEffect'];
        }
        if (isset($map['ProgramName'])) {
            $model->programName = $map['ProgramName'];
        }
        if (isset($map['RecordConfig'])) {
            $model->recordConfig = recordConfig::fromMap($map['RecordConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SideOutputUrl'])) {
            $model->sideOutputUrl = $map['SideOutputUrl'];
        }
        if (isset($map['SideOutputUrlList'])) {
            $model->sideOutputUrlList = $map['SideOutputUrlList'];
        }
        if (isset($map['SyncGroupsConfig'])) {
            $model->syncGroupsConfig = syncGroupsConfig::fromMap($map['SyncGroupsConfig']);
        }
        if (isset($map['TranscodeConfig'])) {
            $model->transcodeConfig = transcodeConfig::fromMap($map['TranscodeConfig']);
        }
        if (isset($map['UrgentImageId'])) {
            $model->urgentImageId = $map['UrgentImageId'];
        }
        if (isset($map['UrgentImageUrl'])) {
            $model->urgentImageUrl = $map['UrgentImageUrl'];
        }
        if (isset($map['UrgentLiveStreamUrl'])) {
            $model->urgentLiveStreamUrl = $map['UrgentLiveStreamUrl'];
        }
        if (isset($map['UrgentMaterialId'])) {
            $model->urgentMaterialId = $map['UrgentMaterialId'];
        }

        return $model;
    }
}
