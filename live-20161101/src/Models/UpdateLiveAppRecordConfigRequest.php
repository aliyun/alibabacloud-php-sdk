<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveAppRecordConfigRequest\recordFormat;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveAppRecordConfigRequest\transcodeRecordFormat;
use AlibabaCloud\Tea\Model;

class UpdateLiveAppRecordConfigRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * This parameter is required.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The interruption duration for merge. If the stream interruption duration exceeds the specified duration, a new recording is generated. The value of this parameter ranges from 15 to 21600 seconds.
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
     * @description The recording end time. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * >  The time range that is specified by the EndTime and StartTime parameters must be less than or equal to seven days. If the value exceeds seven days, ApsaraVideo Live considers seven days as the time range. This parameter takes effect only for the live stream specified by the StreamName parameter. If the StreamName parameter is not specified, this parameter does not take effect.
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
     * @description The endpoint of the Object Storage Service (OSS) bucket.
     *
     * To store live stream recordings in OSS, you need to create an OSS bucket in advance. For more information, see [Configure OSS](https://help.aliyun.com/document_detail/84932.html).
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
     * @description The recording start time. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * >  The start time must be within seven days after the stream ingest starts. This parameter takes effect only for the live stream specified by the StreamName parameter. If the StreamName parameter is not specified, this parameter does not take effect.
     *
     * @example 2018-04-10T09:57:21Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the live stream.
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
     * @description The transcoding template group details.
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
     * @return UpdateLiveAppRecordConfigRequest
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
