<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeCanExpandInstanceDetailListResponseBody\data\itemData;

use AlibabaCloud\Tea\Model;

class dbList extends Model
{
    /**
     * @var string[]
     */
    public $db;
    protected $_name = [
        'db' => 'db',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->db) {
            $res['db'] = $this->db;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['db'])) {
            if (!empty($map['db'])) {
                $model->db = $map['db'];
            }
        }

        return $model;
    }
}
