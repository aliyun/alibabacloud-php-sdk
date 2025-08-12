<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponseBody\liveAppRecordList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponseBody\liveAppRecordList\liveAppRecord\recordFormatList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponseBody\liveAppRecordList\liveAppRecord\transcodeRecordFormatList;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponseBody\liveAppRecordList\liveAppRecord\transcodeTemplates;

class liveAppRecord extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $delayTime;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $onDemond;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var recordFormatList
     */
    public $recordFormatList;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var transcodeRecordFormatList
     */
    public $transcodeRecordFormatList;

    /**
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

    public function validate()
    {
        if (null !== $this->recordFormatList) {
            $this->recordFormatList->validate();
        }
        if (null !== $this->transcodeRecordFormatList) {
            $this->transcodeRecordFormatList->validate();
        }
        if (null !== $this->transcodeTemplates) {
            $this->transcodeTemplates->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['RecordFormatList'] = null !== $this->recordFormatList ? $this->recordFormatList->toArray($noStream) : $this->recordFormatList;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        if (null !== $this->transcodeRecordFormatList) {
            $res['TranscodeRecordFormatList'] = null !== $this->transcodeRecordFormatList ? $this->transcodeRecordFormatList->toArray($noStream) : $this->transcodeRecordFormatList;
        }

        if (null !== $this->transcodeTemplates) {
            $res['TranscodeTemplates'] = null !== $this->transcodeTemplates ? $this->transcodeTemplates->toArray($noStream) : $this->transcodeTemplates;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
