<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesResponseBody;

use AlibabaCloud\Tea\Model;

class audioList extends Model
{
    /**
     * @example 1000
     *
     * @var int
     */
    public $duration;

    /**
     * @example 1000000000
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
     * @example https://xxx-hangzhou.oss-cn-hangzhou.aliyuncs.com/record_xxxx.mp3?Expires=1718045081&OSSAccessKeyId=TMP.3KdwHtvZxopmwacMZEdyb4WHLVmbArrNRB9CTKnR1MaJgmRjdmZczs6Rip66cgKgk2HhQon1yygvBnbY3uqEaZNeHBLcBa&Signature=OFWyAIY%2FdlzfwM9wIfEaKoAudkxxxxx
     *
     * @var string
     */
    public $playUrl;

    /**
     * @example 123
     *
     * @var string
     */
    public $recordId;

    /**
     * @example 1000000000
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
        'duration'  => 'Duration',
        'endTime'   => 'EndTime',
        'fileSize'  => 'FileSize',
        'playUrl'   => 'PlayUrl',
        'recordId'  => 'RecordId',
        'startTime' => 'StartTime',
        'userId'    => 'UserId',
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
        if (null !== $this->playUrl) {
            $res['PlayUrl'] = $this->playUrl;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
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
     * @return audioList
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
        if (isset($map['PlayUrl'])) {
            $model->playUrl = $map['PlayUrl'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
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
