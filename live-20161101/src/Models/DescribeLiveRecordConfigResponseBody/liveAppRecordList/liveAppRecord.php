<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponseBody\liveAppRecordList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponseBody\liveAppRecordList\liveAppRecord\recordFormatList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponseBody\liveAppRecordList\liveAppRecord\transcodeRecordFormatList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponseBody\liveAppRecordList\liveAppRecord\transcodeTemplates;
use AlibabaCloud\Tea\Model;

class liveAppRecord extends Model
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
     * @description The time when the recording configuration was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2016-05-20T09:33:38Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The maximum interruption duration of the live stream. If the actual interruption duration exceeds the threshold, a new recording is generated. Valid values: 15 to 21600. Unit: seconds.
     *
     * @example 180
     *
     * @var int
     */
    public $delayTime;

    /**
     * @description The name of the main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end time of the recording. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-11-08T03:49:18Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The configuration of on-demand recording. Valid values:
     *
     *   **0**: disables on-demand recording.
     *   **1**: enables on-demand recording that is triggered by HTTP callbacks.
     *   **2**: enables on-demand recording that is triggered by stream ingest parameters.
     *   **7**: enables on-demand recording by calling the [RealTimeRecordCommand](https://help.aliyun.com/document_detail/85907.html) operation to manually start or stop recording.
     *
     * >  If you set OnDemand to **1**, you must call the [AddLiveRecordNotifyConfig](https://help.aliyun.com/document_detail/51831.html) operation to configure OnDemandUrl. Otherwise, the configuration of on-demand recording is invalid.
     *
     * @example 0
     *
     * @var int
     */
    public $onDemond;

    /**
     * @description The name of the Object Storage Service (OSS) bucket in which the recordings are stored.
     *
     * @example liveBucket****
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @description The endpoint of the OSS bucket.
     *
     * @example cn-oss-****.aliyuncs.com
     *
     * @var string
     */
    public $ossEndpoint;

    /**
     * @description The recording formats of original streams.
     *
     * @var recordFormatList
     */
    public $recordFormatList;

    /**
     * @description The start time of the recording. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-11-08T02:49:18Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the live stream.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The recording formats of transcoded streams.
     *
     * @var transcodeRecordFormatList
     */
    public $transcodeRecordFormatList;

    /**
     * @description The transcoding templates.
     *
     * @var transcodeTemplates
     */
    public $transcodeTemplates;
    protected $_name = [
        'appName' => 'AppName',
        'createTime' => 'CreateTime',
        'delayTime' => 'DelayTime',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'onDemond' => 'OnDemond',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'recordFormatList' => 'RecordFormatList',
        'startTime' => 'StartTime',
        'streamName' => 'StreamName',
        'transcodeRecordFormatList' => 'TranscodeRecordFormatList',
        'transcodeTemplates' => 'TranscodeTemplates',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->onDemond) {
            $res['OnDemond'] = $this->onDemond;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->recordFormatList) {
            $res['RecordFormatList'] = null !== $this->recordFormatList ? $this->recordFormatList->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->transcodeRecordFormatList) {
            $res['TranscodeRecordFormatList'] = null !== $this->transcodeRecordFormatList ? $this->transcodeRecordFormatList->toMap() : null;
        }
        if (null !== $this->transcodeTemplates) {
            $res['TranscodeTemplates'] = null !== $this->transcodeTemplates ? $this->transcodeTemplates->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveAppRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['OnDemond'])) {
            $model->onDemond = $map['OnDemond'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['RecordFormatList'])) {
            $model->recordFormatList = recordFormatList::fromMap($map['RecordFormatList']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['TranscodeRecordFormatList'])) {
            $model->transcodeRecordFormatList = transcodeRecordFormatList::fromMap($map['TranscodeRecordFormatList']);
        }
        if (isset($map['TranscodeTemplates'])) {
            $model->transcodeTemplates = transcodeTemplates::fromMap($map['TranscodeTemplates']);
        }

        return $model;
    }
}
