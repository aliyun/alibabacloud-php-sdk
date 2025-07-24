<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\SDK\IQS\V20241111\Models\GetIqsUsageResult\records;
use AlibabaCloud\Tea\Model;

class GetIqsUsageResult extends Model
{
    /**
     * @var records[]
     */
    public $records;
    protected $_name = [
        'records' => 'records',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->records) {
            $res['records'] = [];
            if (null !== $this->records && \is_array($this->records)) {
                $n = 0;
                foreach ($this->records as $item) {
                    $res['records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIqsUsageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['records'])) {
            if (!empty($map['records'])) {
                $model->records = [];
                $n = 0;
                foreach ($map['records'] as $item) {
                    $model->records[$n++] = null !== $item ? records::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
