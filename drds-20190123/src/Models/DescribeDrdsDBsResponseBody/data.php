<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBsResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBsResponseBody\data\db;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var db[]
     */
    public $db;
    protected $_name = [
        'db' => 'Db',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->db) {
            $res['Db'] = [];
            if (null !== $this->db && \is_array($this->db)) {
                $n = 0;
                foreach ($this->db as $item) {
                    $res['Db'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Db'])) {
            if (!empty($map['Db'])) {
                $model->db = [];
                $n         = 0;
                foreach ($map['Db'] as $item) {
                    $model->db[$n++] = null !== $item ? db::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
