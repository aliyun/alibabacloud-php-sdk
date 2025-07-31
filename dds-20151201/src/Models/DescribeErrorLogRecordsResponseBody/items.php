<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeErrorLogRecordsResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeErrorLogRecordsResponseBody\items\logRecords;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var logRecords[]
     */
    public $logRecords;
    protected $_name = [
        'logRecords' => 'LogRecords',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->logRecords) {
            $res['LogRecords'] = [];
            if (null !== $this->logRecords && \is_array($this->logRecords)) {
                $n = 0;
                foreach ($this->logRecords as $item) {
                    $res['LogRecords'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['LogRecords'])) {
            if (!empty($map['LogRecords'])) {
                $model->logRecords = [];
                $n = 0;
                foreach ($map['LogRecords'] as $item) {
                    $model->logRecords[$n++] = null !== $item ? logRecords::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
