<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponseBody\topicStatus;

use AlibabaCloud\Tea\Model;

class offsetTable extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponseBody\topicStatus\offsetTable\offsetTable[]
     */
    public $offsetTable;
    protected $_name = [
        'offsetTable' => 'OffsetTable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return offsetTable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OffsetTable'])) {
            if (!empty($map['OffsetTable'])) {
                $model->offsetTable = [];
                $n                  = 0;
                foreach ($map['OffsetTable'] as $item) {
                    $model->offsetTable[$n++] = null !== $item ? \AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicStatusResponseBody\topicStatus\offsetTable\offsetTable::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
