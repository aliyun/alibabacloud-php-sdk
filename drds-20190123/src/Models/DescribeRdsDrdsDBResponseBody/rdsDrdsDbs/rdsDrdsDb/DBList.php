<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsDrdsDBResponseBody\rdsDrdsDbs\rdsDrdsDb;

use AlibabaCloud\Tea\Model;

class DBList extends Model
{
    /**
     * @var string[]
     */
    public $DB;
    protected $_name = [
        'DB' => 'DB',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DB) {
            $res['DB'] = $this->DB;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DB'])) {
            if (!empty($map['DB'])) {
                $model->DB = $map['DB'];
            }
        }

        return $model;
    }
}
