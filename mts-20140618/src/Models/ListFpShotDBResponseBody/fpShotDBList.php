<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotDBResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotDBResponseBody\fpShotDBList\fpShotDB;

class fpShotDBList extends Model
{
    /**
     * @var fpShotDB[]
     */
    public $fpShotDB;
    protected $_name = [
        'fpShotDB' => 'FpShotDB',
    ];

    public function validate()
    {
        if (\is_array($this->fpShotDB)) {
            Model::validateArray($this->fpShotDB);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpShotDB) {
            if (\is_array($this->fpShotDB)) {
                $res['FpShotDB'] = [];
                $n1 = 0;
                foreach ($this->fpShotDB as $item1) {
                    $res['FpShotDB'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FpShotDB'])) {
            if (!empty($map['FpShotDB'])) {
                $model->fpShotDB = [];
                $n1 = 0;
                foreach ($map['FpShotDB'] as $item1) {
                    $model->fpShotDB[$n1] = fpShotDB::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
