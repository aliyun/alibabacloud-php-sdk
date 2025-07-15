<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAppRecordConfigRequest\recordFormat;
use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAppRecordConfigRequest\transcodeRecordFormat;
use AlibabaCloud\Tea\Model;

class AddLiveAppRecordConfigRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs. The value of this parameter must be the same as the application name in the ingest URL. Otherwise, the configuration does not take effect. If you want to match all applications, specify an asterisk (\\*) as the value.
     *
     * This parameter is required.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description Duration for stream concatenation. If the live streaming interruption exceeds the set concatenation duration, a new file will be generated. The concatenation duration can be set between 15 to 21600 seconds.
     *
     * @example 180
     *
     * @var int
     */
    public $delayTime;

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
     * @description Recording end time. Format: <i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z (UTC time).
     * > The difference between EndTime and StartTime should not exceed 7 days; if it does, it will be calculated as 7 days. This is only valid for stream-level recording (when StreamName is not empty).
     *
     * @example 2018-04-16T09:57:21Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Specifies whether to enable on-demand recording. Valid values:
     *
     *   **0**: disables on-demand recording.
     *   **1**: enables on-demand recording by using the HTTP callback method.
     *   **2**: enables on-demand recording by parsing the stream ingest parameters.
     *   **7**: By default, ApsaraVideo Live does not automatically record live streams. You can call the [RealTimeRecordCommand](https://help.aliyun.com/document_detail/2847882.html) operation to manually start or stop recording.
     *
     * >  If you set the OnDemand parameter to **1**, you need to call the [AddLiveRecordNotifyConfig](https://help.aliyun.com/document_detail/2847891.html) operation to configure the OnDemandUrl parameter. Otherwise, ApsaraVideo Live does not perform on-demand recording.
     *
     * @example 1
     *
     * @var int
     */
    public $onDemand;

    /**
     * @description The name of the OSS bucket where live streaming recording files are stored. To store recorded files in OSS, you need to create an OSS bucket in advance. For creation method, please refer to [Configure OSS](https://help.aliyun.com/document_detail/84932.html).
     *
     * This parameter is required.
     *
     * @example liveBucket****
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @description The endpoint of the OSS bucket.
     * To store live stream recordings in OSS, you need to create an OSS bucket in advance. For more information, see Configure OSS.
     *
     * This parameter is required.
     *
     * @example learn.developer.aliyundoc.com
     *
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The recording details.
     *
     * @var recordFormat[]
     */
    public $recordFormat;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description Start time of the recording. Format: <i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z (UTC time).
     * > The set time must be within 7 days of the actual streaming start time, and is only valid for stream-level recording (when StreamName is not empty).
     *
     * @example 2018-04-10T09:57:21Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Stream broadcast name.
     *
     * @example teststream
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The transcoded stream recording details.
     *
     * @var transcodeRecordFormat[]
     */
    public $transcodeRecordFormat;

    /**
     * @description Transcoding stream recording template group.
     *
     * @example sd
     *
     * @var string[]
     */
    public $transcodeTemplates;
    protected $_name = [
        'appName' => 'AppName',
        'delayTime' => 'DelayTime',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'onDemand' => 'OnDemand',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'ownerId' => 'OwnerId',
        'recordFormat' => 'RecordFormat',
        'securityToken' => 'SecurityToken',
        'startTime' => 'StartTime',
        'streamName' => 'StreamName',
        'transcodeRecordFormat' => 'TranscodeRecordFormat',
        'transcodeTemplates' => 'TranscodeTemplates',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->onDemand) {
            $res['OnDemand'] = $this->onDemand;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->recordFormat) {
            $res['RecordFormat'] = [];
            if (null !== $this->recordFormat && \is_array($this->recordFormat)) {
                $n = 0;
                foreach ($this->recordFormat as $item) {
                    $res['RecordFormat'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->transcodeRecordFormat) {
            $res['TranscodeRecordFormat'] = [];
            if (null !== $this->transcodeRecordFormat && \is_array($this->transcodeRecordFormat)) {
                $n = 0;
                foreach ($this->transcodeRecordFormat as $item) {
                    $res['TranscodeRecordFormat'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transcodeTemplates) {
            $res['TranscodeTemplates'] = $this->transcodeTemplates;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLiveAppRecordConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OnDemand'])) {
            $model->onDemand = $map['OnDemand'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RecordFormat'])) {
            if (!empty($map['RecordFormat'])) {
                $model->recordFormat = [];
                $n = 0;
                foreach ($map['RecordFormat'] as $item) {
                    $model->recordFormat[$n++] = null !== $item ? recordFormat::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['TranscodeRecordFormat'])) {
            if (!empty($map['TranscodeRecordFormat'])) {
                $model->transcodeRecordFormat = [];
                $n = 0;
                foreach ($map['TranscodeRecordFormat'] as $item) {
                    $model->transcodeRecordFormat[$n++] = null !== $item ? transcodeRecordFormat::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TranscodeTemplates'])) {
            if (!empty($map['TranscodeTemplates'])) {
                $model->transcodeTemplates = $map['TranscodeTemplates'];
            }
        }

        return $model;
    }
}
