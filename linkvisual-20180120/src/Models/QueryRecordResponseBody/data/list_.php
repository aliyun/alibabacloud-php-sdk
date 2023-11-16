<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 2018-09-10 00:00:00
     *
     * @var string
     */
    public $beginTime;

    /**
     * @example 2018-09-10 00:00:30
     *
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $eventType;

    /**
     * @example file1
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 204800
     *
     * @var int
     */
    public $fileSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $recordType;

    /**
     * @example https://lin****\/****2Cq_90
     *
     * @var string
     */
    public $snapshotUrl;

    /**
     * @example 1
     *
     * @var int
     */
    public $streamType;

    /**
     * @example 1352
     *
     * @var int
     */
    public $videoFrameNumber;
    protected $_name = [
        'beginTime'        => 'BeginTime',
        'endTime'          => 'EndTime',
        'eventType'        => 'EventType',
        'fileName'         => 'FileName',
        'fileSize'         => 'FileSize',
        'recordType'       => 'RecordType',
        'snapshotUrl'      => 'SnapshotUrl',
        'streamType'       => 'StreamType',
        'videoFrameNumber' => 'VideoFrameNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }
        if (null !== $this->snapshotUrl) {
            $res['SnapshotUrl'] = $this->snapshotUrl;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->videoFrameNumber) {
            $res['VideoFrameNumber'] = $this->videoFrameNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }
        if (isset($map['SnapshotUrl'])) {
            $model->snapshotUrl = $map['SnapshotUrl'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['VideoFrameNumber'])) {
            $model->videoFrameNumber = $map['VideoFrameNumber'];
        }

        return $model;
    }
}
