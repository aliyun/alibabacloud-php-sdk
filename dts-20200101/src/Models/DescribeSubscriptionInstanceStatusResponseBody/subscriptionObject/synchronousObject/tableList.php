<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstanceStatusResponseBody\subscriptionObject\synchronousObject;

use AlibabaCloud\Tea\Model;

class tableList extends Model
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
     * @return tableList
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
