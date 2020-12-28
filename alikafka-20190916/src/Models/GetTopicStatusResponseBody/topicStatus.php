<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponseBody;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponseBody\topicStatus\offsetTable;
use AlibabaCloud\Tea\Model;

class topicStatus extends Model
{
    /**
     * @var int
     */
    public $lastTimeStamp;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var offsetTable[]
     */
    public $offsetTable;
    protected $_name = [
        'lastTimeStamp' => 'LastTimeStamp',
        'totalCount'    => 'TotalCount',
        'offsetTable'   => 'OffsetTable',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->offsetTable) {
            $res['OffsetTable'] = [];
            if (null !== $this->offsetTable && \is_array($this->offsetTable)) {
                $n = 0;
                foreach ($this->offsetTable as $item) {
                    $res['OffsetTable'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['OffsetTable'])) {
            if (!empty($map['OffsetTable'])) {
                $model->offsetTable = [];
                $n                  = 0;
                foreach ($map['OffsetTable'] as $item) {
                    $model->offsetTable[$n++] = null !== $item ? offsetTable::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
