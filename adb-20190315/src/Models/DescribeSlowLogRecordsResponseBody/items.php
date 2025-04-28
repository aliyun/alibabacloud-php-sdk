<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogRecordsResponseBody\items\slowLogRecord;

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
        if (\is_array($this->slowLogRecord)) {
            Model::validateArray($this->slowLogRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slowLogRecord) {
            if (\is_array($this->slowLogRecord)) {
                $res['SlowLogRecord'] = [];
                $n1 = 0;
                foreach ($this->slowLogRecord as $item1) {
                    $res['SlowLogRecord'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SlowLogRecord'])) {
            if (!empty($map['SlowLogRecord'])) {
                $model->slowLogRecord = [];
                $n1 = 0;
                foreach ($map['SlowLogRecord'] as $item1) {
                    $model->slowLogRecord[$n1++] = slowLogRecord::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
