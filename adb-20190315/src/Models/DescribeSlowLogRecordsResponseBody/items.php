<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogRecordsResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogRecordsResponseBody\items\slowLogRecord;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var slowLogRecord[]
     */
    public $slowLogRecord;
    protected $_name = [
        'slowLogRecord' => 'SlowLogRecord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slowLogRecord) {
            $res['SlowLogRecord'] = [];
            if (null !== $this->slowLogRecord && \is_array($this->slowLogRecord)) {
                $n = 0;
                foreach ($this->slowLogRecord as $item) {
                    $res['SlowLogRecord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlowLogRecord'])) {
            if (!empty($map['SlowLogRecord'])) {
                $model->slowLogRecord = [];
                $n                    = 0;
                foreach ($map['SlowLogRecord'] as $item) {
                    $model->slowLogRecord[$n++] = null !== $item ? slowLogRecord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
