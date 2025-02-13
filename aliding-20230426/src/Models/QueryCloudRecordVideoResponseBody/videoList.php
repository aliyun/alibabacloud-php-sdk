<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoResponseBody;

use AlibabaCloud\Dara\Model;

class videoList extends Model
{
    /**
     * @var int
     */
    public $duration;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var int
     */
    public $fileSize;
    /**
     * @var string
     */
    public $mediaId;
    /**
     * @var string
     */
    public $recordId;
    /**
     * @var int
     */
    public $recordType;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'duration'   => 'Duration',
        'endTime'    => 'EndTime',
        'fileSize'   => 'FileSize',
        'mediaId'    => 'MediaId',
        'recordId'   => 'RecordId',
        'recordType' => 'RecordType',
        'regionId'   => 'RegionId',
        'startTime'  => 'StartTime',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
