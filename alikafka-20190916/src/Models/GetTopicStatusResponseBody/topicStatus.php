<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponseBody\topicStatus\offsetTable;

class topicStatus extends Model
{
    /**
     * @var int
     */
    public $lastTimeStamp;

    /**
     * @var offsetTable
     */
    public $offsetTable;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'lastTimeStamp' => 'LastTimeStamp',
        'offsetTable' => 'OffsetTable',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->offsetTable) {
            $this->offsetTable->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastTimeStamp) {
            $res['LastTimeStamp'] = $this->lastTimeStamp;
        }

        if (null !== $this->offsetTable) {
            $res['OffsetTable'] = null !== $this->offsetTable ? $this->offsetTable->toArray($noStream) : $this->offsetTable;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
