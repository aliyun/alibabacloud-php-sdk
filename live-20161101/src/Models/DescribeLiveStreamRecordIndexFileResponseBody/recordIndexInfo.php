<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordIndexFileResponseBody;

use AlibabaCloud\Tea\Model;

class recordIndexInfo extends Model
{
    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $recordUrl;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $createTime;

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
    public $domainName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $ossObject;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $width;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $ossEndpoint;
    protected $_name = [
        'streamName'  => 'StreamName',
        'recordUrl'   => 'RecordUrl',
        'recordId'    => 'RecordId',
        'createTime'  => 'CreateTime',
        'height'      => 'Height',
        'ossBucket'   => 'OssBucket',
        'domainName'  => 'DomainName',
        'endTime'     => 'EndTime',
        'ossObject'   => 'OssObject',
        'startTime'   => 'StartTime',
        'appName'     => 'AppName',
        'width'       => 'Width',
        'duration'    => 'Duration',
        'ossEndpoint' => 'OssEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->recordUrl) {
            $res['RecordUrl'] = $this->recordUrl;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ossObject) {
            $res['OssObject'] = $this->ossObject;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
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
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['RecordUrl'])) {
            $model->recordUrl = $map['RecordUrl'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OssObject'])) {
            $model->ossObject = $map['OssObject'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }

        return $model;
    }
}
