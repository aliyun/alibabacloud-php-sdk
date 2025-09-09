<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBsResponseBody\data\db;

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
        if (\is_array($this->db)) {
            Model::validateArray($this->db);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->db) {
            if (\is_array($this->db)) {
                $res['Db'] = [];
                $n1 = 0;
                foreach ($this->db as $item1) {
                    $res['Db'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Db'])) {
            if (!empty($map['Db'])) {
                $model->db = [];
                $n1 = 0;
                foreach ($map['Db'] as $item1) {
                    $model->db[$n1] = db::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
