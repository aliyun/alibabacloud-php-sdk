<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterVulsResponseBody\vulRecords;
use AlibabaCloud\Tea\Model;

class DescribeClusterVulsResponseBody extends Model
{
    /**
     * @var vulRecords[]
     */
    public $vulRecords;
    protected $_name = [
        'vulRecords' => 'vul_records',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vulRecords) {
            $res['vul_records'] = [];
            if (null !== $this->vulRecords && \is_array($this->vulRecords)) {
                $n = 0;
                foreach ($this->vulRecords as $item) {
                    $res['vul_records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterVulsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['vul_records'])) {
            if (!empty($map['vul_records'])) {
                $model->vulRecords = [];
                $n                 = 0;
                foreach ($map['vul_records'] as $item) {
                    $model->vulRecords[$n++] = null !== $item ? vulRecords::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
