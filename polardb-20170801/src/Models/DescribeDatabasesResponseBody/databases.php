<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponseBody\databases\database;

class databases extends Model
{
    /**
     * @var database[]
     */
    public $database;
    protected $_name = [
        'database' => 'Database',
    ];

    public function validate()
    {
        if (\is_array($this->database)) {
            Model::validateArray($this->database);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->database) {
            if (\is_array($this->database)) {
                $res['Database'] = [];
                $n1 = 0;
                foreach ($this->database as $item1) {
                    $res['Database'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Database'])) {
            if (!empty($map['Database'])) {
                $model->database = [];
                $n1 = 0;
                foreach ($map['Database'] as $item1) {
                    $model->database[$n1] = database::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
