<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoResponseBody;

use AlibabaCloud\Tea\Model;

class videoList extends Model
{
    /**
     * @example 59886
     *
     * @var int
     */
    public $duration;

    /**
     * @example 1631172094000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1127942
     *
     * @var int
     */
    public $fileSize;

    /**
     * @example faa1566c5bc24f21821ae2394f82db2e
     *
     * @var string
     */
    public $mediaId;

    /**
     * @example 290882268xxx1172033231
     *
     * @var string
     */
    public $recordId;

    /**
     * @example 1
     *
     * @var int
     */
    public $recordType;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1631172094000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 012345
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return videoList
     */
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
