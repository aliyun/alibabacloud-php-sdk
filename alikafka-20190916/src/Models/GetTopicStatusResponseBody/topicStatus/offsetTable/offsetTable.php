<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponseBody\topicStatus\offsetTable;

use AlibabaCloud\Tea\Model;

class offsetTable extends Model
{
    /**
     * @var int
     */
    public $minOffset;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var int
     */
    public $partition;

    /**
     * @var int
     */
    public $lastUpdateTimestamp;

    /**
     * @var int
     */
    public $maxOffset;
    protected $_name = [
        'minOffset'           => 'MinOffset',
        'topic'               => 'Topic',
        'partition'           => 'Partition',
        'lastUpdateTimestamp' => 'LastUpdateTimestamp',
        'maxOffset'           => 'MaxOffset',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->minOffset) {
            $res['MinOffset'] = $this->minOffset;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }
        if (null !== $this->lastUpdateTimestamp) {
            $res['LastUpdateTimestamp'] = $this->lastUpdateTimestamp;
        }
        if (null !== $this->maxOffset) {
            $res['MaxOffset'] = $this->maxOffset;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return offsetTable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MinOffset'])) {
            $model->minOffset = $map['MinOffset'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }
        if (isset($map['LastUpdateTimestamp'])) {
            $model->lastUpdateTimestamp = $map['LastUpdateTimestamp'];
        }
        if (isset($map['MaxOffset'])) {
            $model->maxOffset = $map['MaxOffset'];
        }

        return $model;
    }
}
