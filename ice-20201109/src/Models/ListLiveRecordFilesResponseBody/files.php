<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordFilesResponseBody;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @example 2016-05-27T09:40:56Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 100.0
     *
     * @var float
     */
    public $duration;

    /**
     * @example 2015-12-01T07:36:10Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example m3u8
     *
     * @var string
     */
    public $format;

    /**
     * @example 640
     *
     * @var int
     */
    public $height;

    /**
     * @example c4d7f0a4-b506-43f9-8de3-07732c3f****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example LiveRecordJob***
     *
     * @var string
     */
    public $jobName;

    /**
     * @example c4d7f0a4-b506-43f9-8de3-07732c3f****
     *
     * @var string
     */
    public $recordId;

    /**
     * @example { "Type": "oss", "Endpoint":"oss-cn-shanghai.aliyuncs.com", "Bucket": "test-bucket" }
     *
     * @var string
     */
    public $recordOutput;

    /**
     * @example http://****\/atestObject****.m3u8
     *
     * @var string
     */
    public $recordUrl;

    /**
     * @example 2015-12-01T07:36:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example LiveStream***
     *
     * @var string
     */
    public $streamUrl;

    /**
     * @example 480
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'duration'     => 'Duration',
        'endTime'      => 'EndTime',
        'format'       => 'Format',
        'height'       => 'Height',
        'jobId'        => 'JobId',
        'jobName'      => 'JobName',
        'recordId'     => 'RecordId',
        'recordOutput' => 'RecordOutput',
        'recordUrl'    => 'RecordUrl',
        'startTime'    => 'StartTime',
        'streamUrl'    => 'StreamUrl',
        'width'        => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->recordOutput) {
            $res['RecordOutput'] = $this->recordOutput;
        }
        if (null !== $this->recordUrl) {
            $res['RecordUrl'] = $this->recordUrl;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return files
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['RecordOutput'])) {
            $model->recordOutput = $map['RecordOutput'];
        }
        if (isset($map['RecordUrl'])) {
            $model->recordUrl = $map['RecordUrl'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
