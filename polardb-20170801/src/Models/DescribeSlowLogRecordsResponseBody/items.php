<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogRecordsResponseBody\items\SQLSlowRecord;

class items extends Model
{
    /**
     * @var SQLSlowRecord[]
     */
    public $SQLSlowRecord;
    protected $_name = [
        'SQLSlowRecord' => 'SQLSlowRecord',
    ];

    public function validate()
    {
        if (\is_array($this->SQLSlowRecord)) {
            Model::validateArray($this->SQLSlowRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SQLSlowRecord) {
            if (\is_array($this->SQLSlowRecord)) {
                $res['SQLSlowRecord'] = [];
                $n1 = 0;
                foreach ($this->SQLSlowRecord as $item1) {
                    $res['SQLSlowRecord'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SQLSlowRecord'])) {
            if (!empty($map['SQLSlowRecord'])) {
                $model->SQLSlowRecord = [];
                $n1 = 0;
                foreach ($map['SQLSlowRecord'] as $item1) {
                    $model->SQLSlowRecord[$n1] = SQLSlowRecord::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
