<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponseBody\topicStatus;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponseBody\topicStatus\offsetTable\offsetTable;

class offsetTable extends Model
{
    /**
     * @var offsetTable[]
     */
    public $offsetTable;
    protected $_name = [
        'offsetTable' => 'OffsetTable',
    ];

    public function validate()
    {
        if (\is_array($this->offsetTable)) {
            Model::validateArray($this->offsetTable);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->offsetTable) {
            if (\is_array($this->offsetTable)) {
                $res['OffsetTable'] = [];
                $n1 = 0;
                foreach ($this->offsetTable as $item1) {
                    $res['OffsetTable'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['OffsetTable'])) {
            if (!empty($map['OffsetTable'])) {
                $model->offsetTable = [];
                $n1 = 0;
                foreach ($map['OffsetTable'] as $item1) {
                    $model->offsetTable[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
