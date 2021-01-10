<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $snapshotUrl;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $recordType;

    /**
     * @var int
     */
    public $streamType;

    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $videoFrameNumber;

    /**
     * @var int
     */
    public $fileSize;
    protected $_name = [
        'snapshotUrl'      => 'SnapshotUrl',
        'endTime'          => 'EndTime',
        'recordType'       => 'RecordType',
        'streamType'       => 'StreamType',
        'beginTime'        => 'BeginTime',
        'fileName'         => 'FileName',
        'videoFrameNumber' => 'VideoFrameNumber',
        'fileSize'         => 'FileSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotUrl) {
            $res['SnapshotUrl'] = $this->snapshotUrl;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->videoFrameNumber) {
            $res['VideoFrameNumber'] = $this->videoFrameNumber;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnapshotUrl'])) {
            $model->snapshotUrl = $map['SnapshotUrl'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['VideoFrameNumber'])) {
            $model->videoFrameNumber = $map['VideoFrameNumber'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        return $model;
    }
}
