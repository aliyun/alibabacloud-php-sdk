<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSlowLogRecordsResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSlowLogRecordsResponseBody\items\SQLSlowRecord;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQLSlowRecord) {
            $res['SQLSlowRecord'] = [];
            if (null !== $this->SQLSlowRecord && \is_array($this->SQLSlowRecord)) {
                $n = 0;
                foreach ($this->SQLSlowRecord as $item) {
                    $res['SQLSlowRecord'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['SQLSlowRecord'])) {
            if (!empty($map['SQLSlowRecord'])) {
                $model->SQLSlowRecord = [];
                $n                    = 0;
                foreach ($map['SQLSlowRecord'] as $item) {
                    $model->SQLSlowRecord[$n++] = null !== $item ? SQLSlowRecord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
