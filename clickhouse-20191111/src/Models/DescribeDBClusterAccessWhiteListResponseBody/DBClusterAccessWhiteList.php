<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAccessWhiteListResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAccessWhiteListResponseBody\DBClusterAccessWhiteList\IPArray;
use AlibabaCloud\Tea\Model;

class DBClusterAccessWhiteList extends Model
{
    /**
     * @var IPArray[]
     */
    public $IPArray;
    protected $_name = [
        'IPArray' => 'IPArray',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IPArray) {
            $res['IPArray'] = [];
            if (null !== $this->IPArray && \is_array($this->IPArray)) {
                $n = 0;
                foreach ($this->IPArray as $item) {
                    $res['IPArray'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBClusterAccessWhiteList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IPArray'])) {
            if (!empty($map['IPArray'])) {
                $model->IPArray = [];
                $n              = 0;
                foreach ($map['IPArray'] as $item) {
                    $model->IPArray[$n++] = null !== $item ? IPArray::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
