<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSQLLogRecordsResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSQLLogRecordsResponseBody\items\SQLLogRecord;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQLLogRecord) {
            $res['SQLLogRecord'] = [];
            if (null !== $this->SQLLogRecord && \is_array($this->SQLLogRecord)) {
                $n = 0;
                foreach ($this->SQLLogRecord as $item) {
                    $res['SQLLogRecord'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['SQLLogRecord'])) {
            if (!empty($map['SQLLogRecord'])) {
                $model->SQLLogRecord = [];
                $n                   = 0;
                foreach ($map['SQLLogRecord'] as $item) {
                    $model->SQLLogRecord[$n++] = null !== $item ? SQLLogRecord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
