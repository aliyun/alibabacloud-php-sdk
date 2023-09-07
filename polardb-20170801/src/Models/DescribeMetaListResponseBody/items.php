<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeMetaListResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The name of the database that can be restored.
     *
     * @example test_db
     *
     * @var string
     */
    public $database;

    /**
     * @description The name of the table that can be restored.
     *
     * @var string[]
     */
    public $tables;
    protected $_name = [
        'database' => 'Database',
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
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = $map['Tables'];
            }
        }

        return $model;
    }
}
