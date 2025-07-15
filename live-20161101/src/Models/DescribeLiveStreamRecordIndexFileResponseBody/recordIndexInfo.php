<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordIndexFileResponseBody;

use AlibabaCloud\Tea\Model;

class recordIndexInfo extends Model
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
     * @description The time when the index file was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2016-05-27T09:40:56Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The recording length. Unit: seconds.
     *
     * @example 588.849
     *
     * @var float
     */
    public $duration;

    /**
     * @description The end time of the index file. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2016-05-25T05:47:11Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The video format.
     *
     * @example mp4
     *
     * @var string
     */
    public $format;

    /**
     * @description The video height.
     *
     * @example 480
     *
     * @var int
     */
    public $height;

    /**
     * @description The name of the Object Storage Service (OSS) bucket.
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
     * @description The name of the storage file in OSS.
     *
     * @example liveObject****
     *
     * @var string
     */
    public $ossObject;

    /**
     * @description The ID of the index file.
     *
     * @example c4d7f0a4-b506-43f9-8de3-07732c3f****
     *
     * @var string
     */
    public $recordId;

    /**
     * @description The URL of the index file.
     *
     * @var string
     */
    public $recordUrl;

    /**
     * @description The start time of the index file. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2015-12-01T05:36:00Z
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
     * @description The video width.
     *
     * @example 640
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'appName' => 'AppName',
        'createTime' => 'CreateTime',
        'domainName' => 'DomainName',
        'duration' => 'Duration',
        'endTime' => 'EndTime',
        'format' => 'Format',
        'height' => 'Height',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'ossObject' => 'OssObject',
        'recordId' => 'RecordId',
        'recordUrl' => 'RecordUrl',
        'startTime' => 'StartTime',
        'streamName' => 'StreamName',
        'width' => 'Width',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossObject) {
            $res['OssObject'] = $this->ossObject;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->recordUrl) {
            $res['RecordUrl'] = $this->recordUrl;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordIndexInfo
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OssObject'])) {
            $model->ossObject = $map['OssObject'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['RecordUrl'])) {
            $model->recordUrl = $map['RecordUrl'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
