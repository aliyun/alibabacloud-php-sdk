<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeProcessListResponseBody\processList;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeProcessListResponseBody\processList\data\resultSet;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var resultSet[]
     */
    public $resultSet;
    protected $_name = [
        'resultSet' => 'ResultSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultSet) {
            $res['ResultSet'] = [];
            if (null !== $this->resultSet && \is_array($this->resultSet)) {
                $n = 0;
                foreach ($this->resultSet as $item) {
                    $res['ResultSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResultSet'])) {
            if (!empty($map['ResultSet'])) {
                $model->resultSet = [];
                $n                = 0;
                foreach ($map['ResultSet'] as $item) {
                    $model->resultSet[$n++] = null !== $item ? resultSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
