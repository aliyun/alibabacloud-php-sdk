<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkWarehouseBatchSQLResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\SparkBatchSQL;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var SparkBatchSQL[]
     */
    public $queries;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'queries' => 'Queries',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->queries)) {
            Model::validateArray($this->queries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queries) {
            if (\is_array($this->queries)) {
                $res['Queries'] = [];
                $n1 = 0;
                foreach ($this->queries as $item1) {
                    $res['Queries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Queries'])) {
            if (!empty($map['Queries'])) {
                $model->queries = [];
                $n1 = 0;
                foreach ($map['Queries'] as $item1) {
                    $model->queries[$n1++] = SparkBatchSQL::fromMap($item1);
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
