<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\StartWhiteBoardRecordingResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 白板录制Session的唯一标识
     *
     * @var string
     */
    public $recordId;

    /**
     * @description 录制开始的UNIX时间戳
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'recordId'  => 'RecordId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
