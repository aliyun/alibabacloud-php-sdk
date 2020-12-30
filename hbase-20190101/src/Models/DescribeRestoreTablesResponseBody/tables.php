<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponseBody;

use AlibabaCloud\Tea\Model;

class tables extends Model
{
    /**
     * @var string[]
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
            $res['Table'] = $this->table;
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
                $model->table = $map['Table'];
            }
        }

        return $model;
    }
}
