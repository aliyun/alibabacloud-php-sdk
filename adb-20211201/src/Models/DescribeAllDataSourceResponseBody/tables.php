<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody\tables\table;
use AlibabaCloud\Tea\Model;

class tables extends Model
{
    /**
     * @var table[]
     */
    public $table;
    protected $_name = [
        'table' => 'Table',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->table) {
            $res['Table'] = [];
            if (null !== $this->table && \is_array($this->table)) {
                $n = 0;
                foreach ($this->table as $item) {
                    $res['Table'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Table'])) {
            if (!empty($map['Table'])) {
                $model->table = [];
                $n            = 0;
                foreach ($map['Table'] as $item) {
                    $model->table[$n++] = null !== $item ? table::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
