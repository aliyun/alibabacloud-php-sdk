<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordIndexFileResponseBody;

use AlibabaCloud\Dara\Model;

class recordIndexInfo extends Model
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
     * @var string
     */
    public $domainName;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $format;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var string
     */
    public $ossObject;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $recordUrl;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $streamName;

    /**
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

    public function validate()
    {
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
