<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataTotalCountResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataTotalCountResponseBody\dataCount\column;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataTotalCountResponseBody\dataCount\instance;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataTotalCountResponseBody\dataCount\oss;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataTotalCountResponseBody\dataCount\package;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataTotalCountResponseBody\dataCount\table;
use AlibabaCloud\Tea\Model;

class dataCount extends Model
{
    /**
     * @var instance
     */
    public $instance;

    /**
     * @var table
     */
    public $table;

    /**
     * @var package
     */
    public $package;

    /**
     * @var column
     */
    public $column;

    /**
     * @var oss
     */
    public $oss;
    protected $_name = [
        'instance' => 'Instance',
        'table'    => 'Table',
        'package'  => 'Package',
        'column'   => 'Column',
        'oss'      => 'Oss',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instance) {
            $res['Instance'] = null !== $this->instance ? $this->instance->toMap() : null;
        }
        if (null !== $this->table) {
            $res['Table'] = null !== $this->table ? $this->table->toMap() : null;
        }
        if (null !== $this->package) {
            $res['Package'] = null !== $this->package ? $this->package->toMap() : null;
        }
        if (null !== $this->column) {
            $res['Column'] = null !== $this->column ? $this->column->toMap() : null;
        }
        if (null !== $this->oss) {
            $res['Oss'] = null !== $this->oss ? $this->oss->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Instance'])) {
            $model->instance = instance::fromMap($map['Instance']);
        }
        if (isset($map['Table'])) {
            $model->table = table::fromMap($map['Table']);
        }
        if (isset($map['Package'])) {
            $model->package = package::fromMap($map['Package']);
        }
        if (isset($map['Column'])) {
            $model->column = column::fromMap($map['Column']);
        }
        if (isset($map['Oss'])) {
            $model->oss = oss::fromMap($map['Oss']);
        }

        return $model;
    }
}
