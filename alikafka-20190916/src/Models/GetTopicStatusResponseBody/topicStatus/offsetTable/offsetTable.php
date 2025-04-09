<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponseBody\topicStatus\offsetTable;

use AlibabaCloud\Dara\Model;

class offsetTable extends Model
{
    /**
     * @var int
     */
    public $lastUpdateTimestamp;

    /**
     * @var int
     */
    public $maxOffset;

    /**
     * @var int
     */
    public $minOffset;

    /**
     * @var int
     */
    public $partition;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'lastUpdateTimestamp' => 'LastUpdateTimestamp',
        'maxOffset' => 'MaxOffset',
        'minOffset' => 'MinOffset',
        'partition' => 'Partition',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastUpdateTimestamp) {
            $res['LastUpdateTimestamp'] = $this->lastUpdateTimestamp;
        }

        if (null !== $this->maxOffset) {
            $res['MaxOffset'] = $this->maxOffset;
        }

        if (null !== $this->minOffset) {
            $res['MinOffset'] = $this->minOffset;
        }

        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['LastUpdateTimestamp'])) {
            $model->lastUpdateTimestamp = $map['LastUpdateTimestamp'];
        }

        if (isset($map['MaxOffset'])) {
            $model->maxOffset = $map['MaxOffset'];
        }

        if (isset($map['MinOffset'])) {
            $model->minOffset = $map['MinOffset'];
        }

        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
