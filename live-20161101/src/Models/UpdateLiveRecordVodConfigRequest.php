<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveRecordVodConfigRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs. You can view the application name on the [Stream Management](https://help.aliyun.com/document_detail/197397.html) page of the ApsaraVideo Live console.
     *
     * This parameter is required.
     *
     * @example testName
     *
     * @var string
     */
    public $appName;

    /**
     * @description Specifies whether to enable automatic merging. Valid values:
     *
     *   **ON**: enables automatic merging. If you set this parameter to ON, you must also specify the ComposeVodTranscodeGroupId parameter.
     *   **OFF**: disables automatic merging.
     *
     * @example OFF
     *
     * @var string
     */
    public $autoCompose;

    /**
     * @description The ID of the transcoding template group in ApsaraVideo VOD that is used to transcode the video file. The video file is generated by merging the VOD files created from live streams.
     *
     * >  To query transcoding template groups, call the [ListTranscodeTemplateGroup](https://help.aliyun.com/document_detail/454928.html) operation.
     *
     * @example *****
     *
     * @var string
     */
    public $composeVodTranscodeGroupId;

    /**
     * @description The recording cycle. Unit: seconds. Valid values: **300 to 21600**. Default value: **3600**.
     *
     * @example 300
     *
     * @var int
     */
    public $cycleDuration;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Specifies whether to enable on-demand recording. Valid values:
     *
     *   **0** (default): disables on-demand recording.
     *   **1**: enables on-demand recording by using the HTTP callback method.
     *
     * @example 0
     *
     * @var int
     */
    public $onDemand;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the live stream. You can view the stream name on the [Stream Management](https://help.aliyun.com/document_detail/197397.html) page of the ApsaraVideo Live console.
     *
     * @example stream
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The ID of the transcoding template group in ApsaraVideo VOD.
     *
     * This parameter is required.
     *
     * @example e2d796d3bb5fd8049d32bff62f94****
     *
     * @var string
     */
    public $vodTranscodeGroupId;
    protected $_name = [
        'appName' => 'AppName',
        'autoCompose' => 'AutoCompose',
        'composeVodTranscodeGroupId' => 'ComposeVodTranscodeGroupId',
        'cycleDuration' => 'CycleDuration',
        'domainName' => 'DomainName',
        'onDemand' => 'OnDemand',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'streamName' => 'StreamName',
        'vodTranscodeGroupId' => 'VodTranscodeGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->autoCompose) {
            $res['AutoCompose'] = $this->autoCompose;
        }
        if (null !== $this->composeVodTranscodeGroupId) {
            $res['ComposeVodTranscodeGroupId'] = $this->composeVodTranscodeGroupId;
        }
        if (null !== $this->cycleDuration) {
            $res['CycleDuration'] = $this->cycleDuration;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->onDemand) {
            $res['OnDemand'] = $this->onDemand;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->vodTranscodeGroupId) {
            $res['VodTranscodeGroupId'] = $this->vodTranscodeGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLiveRecordVodConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AutoCompose'])) {
            $model->autoCompose = $map['AutoCompose'];
        }
        if (isset($map['ComposeVodTranscodeGroupId'])) {
            $model->composeVodTranscodeGroupId = $map['ComposeVodTranscodeGroupId'];
        }
        if (isset($map['CycleDuration'])) {
            $model->cycleDuration = $map['CycleDuration'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OnDemand'])) {
            $model->onDemand = $map['OnDemand'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['VodTranscodeGroupId'])) {
            $model->vodTranscodeGroupId = $map['VodTranscodeGroupId'];
        }

        return $model;
    }
}
