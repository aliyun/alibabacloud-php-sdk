<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\SearchResponseBody;

use AlibabaCloud\SDK\DataLake\V20200710\Models\SearchResponseBody\tableResult\tables;
use AlibabaCloud\Tea\Model;

class tableResult extends Model
{
    /**
     * @var tables[]
     */
    public $tables;

    /**
     * @example 1100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'tables'     => 'Tables',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tables) {
            $res['Tables'] = [];
            if (null !== $this->tables && \is_array($this->tables)) {
                $n = 0;
                foreach ($this->tables as $item) {
                    $res['Tables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n             = 0;
                foreach ($map['Tables'] as $item) {
                    $model->tables[$n++] = null !== $item ? tables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
