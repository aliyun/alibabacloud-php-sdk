<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordVodConfigsResponseBody\liveRecordVodConfigs;

use AlibabaCloud\Tea\Model;

class liveRecordVodConfig extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description Indicates whether automatic merging is enabled. Valid values:
     *
     *   **ON**
     *   **OFF**
     *
     * @example ON
     *
     * @var string
     */
    public $autoCompose;

    /**
     * @description The ID of the transcoding template group that was used to automatically merge the VOD files created from the live streams.
     *
     * >  This parameter is returned if the value of the AutoCompose parameter is ON.
     *
     * @example dadfcaadde****
     *
     * @var string
     */
    public $composeVodTranscodeGroupId;

    /**
     * @description The time when the live stream was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2015-12-01T17:37:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The recording cycle. Unit: seconds. Default value: **3600**. Valid values: **300 to 21600**.
     *
     * @example 360
     *
     * @var int
     */
    public $cycleDuration;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Indicates whether on-demand recording is enabled. Valid values:
     *
     *   **0** (default): On-demand recording is disabled.
     *   **1**: On-demand recording is enabled by using the HTTP callback method.
     *
     * @example 0
     *
     * @var int
     */
    public $onDemand;

    /**
     * @description The storage location.
     *
     * @example ****-tjptr2vatm.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The name of the live stream.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The ID of the transcoding template group in ApsaraVideo VOD.
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
        'createTime' => 'CreateTime',
        'cycleDuration' => 'CycleDuration',
        'domainName' => 'DomainName',
        'onDemand' => 'OnDemand',
        'storageLocation' => 'StorageLocation',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
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
     * @return liveRecordVodConfig
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
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
