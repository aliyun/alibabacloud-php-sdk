<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeInclinedTablesResponseBody\items;

use AlibabaCloud\Tea\Model;

class table extends Model
{
    /**
     * @description Indicates whether data is skewed in partitions of the table. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isIncline;

    /**
     * @description The name of the table.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the database.
     *
     * @example adb_demo
     *
     * @var string
     */
    public $schema;

    /**
     * @description The number of rows in the table.
     *
     * @example 2
     *
     * @var int
     */
    public $size;

    /**
     * @description The type of the table. Valid values:
     *
     *   **FactTable**
     *   **DimensionTable**
     *
     * @example FactTable
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'isIncline' => 'IsIncline',
        'name'      => 'Name',
        'schema'    => 'Schema',
        'size'      => 'Size',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isIncline) {
            $res['IsIncline'] = $this->isIncline;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return table
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsIncline'])) {
            $model->isIncline = $map['IsIncline'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
