<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponseBody;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponseBody\topicStatus\offsetTable;
use AlibabaCloud\Tea\Model;

class topicStatus extends Model
{
    /**
     * @description The time when the last consumed message was generated.
     *
     * @example 1566470063575
     *
     * @var int
     */
    public $lastTimeStamp;

    /**
     * @description The information about offsets in the topic.
     *
     * @var offsetTable
     */
    public $offsetTable;

    /**
     * @description The number of messages in the topic.
     *
     * @example 423
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'lastTimeStamp' => 'LastTimeStamp',
        'offsetTable'   => 'OffsetTable',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastTimeStamp) {
            $res['LastTimeStamp'] = $this->lastTimeStamp;
        }
        if (null !== $this->offsetTable) {
            $res['OffsetTable'] = null !== $this->offsetTable ? $this->offsetTable->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topicStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastTimeStamp'])) {
            $model->lastTimeStamp = $map['LastTimeStamp'];
        }
        if (isset($map['OffsetTable'])) {
            $model->offsetTable = offsetTable::fromMap($map['OffsetTable']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
