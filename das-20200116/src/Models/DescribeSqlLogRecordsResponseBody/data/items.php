<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogRecordsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogRecordsResponseBody\data\items\SQLLogRecord;

class items extends Model
{
    /**
     * @var SQLLogRecord[]
     */
    public $SQLLogRecord;
    protected $_name = [
        'SQLLogRecord' => 'SQLLogRecord',
    ];

    public function validate()
    {
        if (\is_array($this->SQLLogRecord)) {
            Model::validateArray($this->SQLLogRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SQLLogRecord) {
            if (\is_array($this->SQLLogRecord)) {
                $res['SQLLogRecord'] = [];
                $n1 = 0;
                foreach ($this->SQLLogRecord as $item1) {
                    $res['SQLLogRecord'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['SQLLogRecord'])) {
            if (!empty($map['SQLLogRecord'])) {
                $model->SQLLogRecord = [];
                $n1 = 0;
                foreach ($map['SQLLogRecord'] as $item1) {
                    $model->SQLLogRecord[$n1] = SQLLogRecord::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
