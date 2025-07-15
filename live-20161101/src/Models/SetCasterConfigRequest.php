<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetCasterConfigRequest extends Model
{
    /**
     * @description The configuration for automatic switchover to the standby resource.
     *
     * The `eofThres` field specifies the duration after which the production studio automatically switches to the standby resource if a stream interruption occurs. Unit: seconds.
     *
     * @example {"eofThres":3}
     *
     * @var string
     */
    public $autoSwitchUrgentConfig;

    /**
     * @description Specifies whether the production studio automatically switches to the standby resource in case of a stream interruption.
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $autoSwitchUrgentOn;

    /**
     * @description The callback URL. Enter a valid HTTP address for receiving callback notifications. If you do not specify this parameter, the production studio does not send callback notifications.
     *
     * >  For more information about production studio callbacks, see [Production studio callbacks](https://help.aliyun.com/document_detail/213633.html).
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description The ID of the production studio.
     *
     *   If the production studio was created by calling the [CreateCaster](https://help.aliyun.com/document_detail/2848009.html) operation, check the value of the response parameter CasterId to obtain the ID.
     *   If the production studio was created by using the ApsaraVideo Live console, obtain the ID on the **Production Studio Management** page. To go to the page, log on to the **ApsaraVideo Live console** and click **Production Studios** in the left-side navigation pane.
     *
     * >  You can find the ID of the production studio in the Instance ID/Name column.
     *
     * This parameter is required.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The name of the production studio.
     *
     * @example liveCaster****
     *
     * @var string
     */
    public $casterName;

    /**
     * @description Specifies whether to enable channels. Valid values:
     *
     *   **0** (default): disables channels.
     *   **1**: enables channels.
     *
     * > You cannot disable channels after you enable them. If you set this parameter to 0, the production studio references video resources in a layout without using channels. If you enable channels for the first time, make sure that the production studio is in the idle state. After you enable channels, a new layout that references video resources by using channels is generated to replace the original one. Therefore, you must specify video resources for channels. You can use the channels to change the playback progress or status. If the video resource, preview, and program modules of the production studio use the same video source, the three modules display the same content.
     *
     * @example 1
     *
     * @var int
     */
    public $channelEnable;

    /**
     * @description Specifies whether to enable stream delay. Unit: seconds. Valid values:
     *
     *   **0** (default): disables stream delay.
     *
     *   **A value greater than 0**: enables stream delay.
     *
     *   **Empty**: clears the stream delay configuration.
     **Note **The maximum value can be 300 seconds.
     * @example 0
     *
     * @var float
     */
    public $delay;

    /**
     * @description The main streaming domain.
     *
     * Complete the configuration of the domain name before the production studio is started. If you do not specify this parameter, the domain configuration for the production studio is cleared.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Specifies whether to enable the carousel playback feature. Valid values:
     *
     *   **0**: disables carousel playback.
     *   **1**: enables carousel playback.
     *
     * @example 1
     *
     * @var int
     */
    public $programEffect;

    /**
     * @description The name of the playlist for carousel playback. You can specify this parameter if you enable the carousel playback feature.
     *
     * @example program_name
     *
     * @var string
     */
    public $programName;

    /**
     * @description The recording configuration. The value is a JSON string. You can configure the following fields:
     *
     *   **endpoint**: the API server address of an Alibaba Cloud service.
     *   **ossBucket**: the name of the Object Storage Service (OSS) bucket.
     *   **videoFormat**: the format in which the video file can be exported. Example: `[{\\"OssObjectPrefix\\":\\"record/{AppName}/{StreamName}/{StartTime}_{EndTime}\\",\\"Format\\":\\"m3u8\\",\\"CycleDuration\\":21600,\\"SliceOssObjectPrefix\\":\\"record/{AppName}/{StreamName}/{UnixTimestamp}\\"},{\\"OssObjectPrefix\\":\\"record/{AppName}/{StreamName}/{StartTime}_{EndTime}\\",\\"Format\\":\\"flv\\",\\"CycleDuration\\":21600}]`.
     *   **interval**: the interval between recordings. Unit: milliseconds.
     *
     * > If you do not specify this parameter, the recording feature is disabled and the recording configuration for the production studio is cleared.
     *
     * @example { "endpoint": "http://oss-cn-********.aliyuncs.com/api",  "ossBucket****": "liveBucket****", "VideoFormat":[{\\"OssObjectPrefix\\":\\"record/{AppName}/{StreamName}/{StartTime}_{EndTime}\\",\\"Format\\":\\"m3u8\\",\\"CycleDuration\\":21600,\\"SliceOssObjectPrefix\\":\\"record/{AppName}/{StreamName}/{UnixTimestamp}\\"},{\\"OssObjectPrefix\\":\\"record/{AppName}/{StreamName}/{StartTime}_{EndTime}\\",\\"Format\\":\\"flv\\",\\"CycleDuration\\":21600}] "interval": 5 }
     *
     * @var string
     */
    public $recordConfig;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The custom stream redirect URL.
     *
     * If you do not specify this parameter, the production studio uses the redirect URL generated by the system.
     *
     * > Redirect URLs support only the Real-Time Messaging Protocol (RTMP) protocol.
     *
     * @var string
     */
    public $sideOutputUrl;

    /**
     * @description The stream relay URLs. A relay URL can be an Alibaba Cloud URL or a URL from a third-party CDN provider. You can specify up to 20 relay URLs over the RTMP protocol.
     *
     * > Use the following format to specify multiple relay URLs: "rtmp://domain/app1/stream1","rtmp://domain/app2/stream2".
     *
     * @example rtmp://domain/app/stream?***
     *
     * @var string
     */
    public $sideOutputUrlList;

    /**
     * @description The multi-view synchronization configuration. You can specify this parameter to synchronize multiple video sources.
     *
     * There are two modes of multi-view synchronization.
     *
     *   A value of 0 for the mode field specifies the streamer mode. In this mode, multiple video sources are synchronized based on the settings by the streamer.
     *   A value of 1 for the mode field specifies the conference mode. In this mode, all video sources are synchronized.
     *
     * In the streamer mode, the hostResourceId field specifies the video source on the streamer side.
     *
     * In the conference mode, the hostResourceId field is not available. You need to provide only resource IDs that are required.
     *
     * @example "[{\\"mode\\":0,\\"resourceIds\\":[\\"5a6c1c33-8424-46f6-813c-c152220a****\\",\\"4e6521dc-a40a-4077-b6bf-1fb12a76****\\"],\\"hostResourceId\\":\\"3aa2b39a-fd0e-4b8c-be73-b7af31c4****\\"}]"
     *
     * @var string
     */
    public $syncGroupsConfig;

    /**
     * @description The transcoding configuration.
     *
     * The value is a JSON string. Use upper camel case for fields of the string. If you do not specify this parameter, the transcoding configuration is cleared. If no transcoding template is available, an error occurs when the production studio is started.
     *
     * @example {"casterTemplate": "lp_ld"}
     *
     * @var string
     */
    public $transcodeConfig;

    /**
     * @description The ID of the standby image from the media library.
     *
     * @example a089175eb5f4427684fc0715159a****
     *
     * @var string
     */
    public $urgentImageId;

    /**
     * @description The URL of the standby image.
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
     * @description The ID of the standby video from the media library. If you do not specify this parameter, the standby video configuration for the production studio is cleared.
     *
     * @example a2b8e671
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
        'ownerId' => 'OwnerId',
        'programEffect' => 'ProgramEffect',
        'programName' => 'ProgramName',
        'recordConfig' => 'RecordConfig',
        'regionId' => 'RegionId',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->programEffect) {
            $res['ProgramEffect'] = $this->programEffect;
        }
        if (null !== $this->programName) {
            $res['ProgramName'] = $this->programName;
        }
        if (null !== $this->recordConfig) {
            $res['RecordConfig'] = $this->recordConfig;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sideOutputUrl) {
            $res['SideOutputUrl'] = $this->sideOutputUrl;
        }
        if (null !== $this->sideOutputUrlList) {
            $res['SideOutputUrlList'] = $this->sideOutputUrlList;
        }
        if (null !== $this->syncGroupsConfig) {
            $res['SyncGroupsConfig'] = $this->syncGroupsConfig;
        }
        if (null !== $this->transcodeConfig) {
            $res['TranscodeConfig'] = $this->transcodeConfig;
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
     * @return SetCasterConfigRequest
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProgramEffect'])) {
            $model->programEffect = $map['ProgramEffect'];
        }
        if (isset($map['ProgramName'])) {
            $model->programName = $map['ProgramName'];
        }
        if (isset($map['RecordConfig'])) {
            $model->recordConfig = $map['RecordConfig'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SideOutputUrl'])) {
            $model->sideOutputUrl = $map['SideOutputUrl'];
        }
        if (isset($map['SideOutputUrlList'])) {
            $model->sideOutputUrlList = $map['SideOutputUrlList'];
        }
        if (isset($map['SyncGroupsConfig'])) {
            $model->syncGroupsConfig = $map['SyncGroupsConfig'];
        }
        if (isset($map['TranscodeConfig'])) {
            $model->transcodeConfig = $map['TranscodeConfig'];
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
