<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMetaListResponseBody\items;

use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @description The database name.
     *
     * @example testdb1
     *
     * @var string
     */
    public $database;

    /**
     * @description The table size. Unit: KB.
     *
     * @example 64
     *
     * @var string
     */
    public $size;

    /**
     * @description The table name.
     *
     * @example test1
     *
     * @var string
     */
    public $tables;
    protected $_name = [
        'database' => 'Database',
        'size'     => 'Size',
        'tables'   => 'Tables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Tables'])) {
            $model->tables = $map['Tables'];
        }

        return $model;
    }
}
