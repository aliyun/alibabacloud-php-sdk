<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescibeImportsFromDatabaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescibeImportsFromDatabaseResponseBody\items\importResultFromDB;

class items extends Model
{
    /**
     * @var importResultFromDB[]
     */
    public $importResultFromDB;
    protected $_name = [
        'importResultFromDB' => 'ImportResultFromDB',
    ];

    public function validate()
    {
        if (\is_array($this->importResultFromDB)) {
            Model::validateArray($this->importResultFromDB);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->importResultFromDB) {
            if (\is_array($this->importResultFromDB)) {
                $res['ImportResultFromDB'] = [];
                $n1 = 0;
                foreach ($this->importResultFromDB as $item1) {
                    $res['ImportResultFromDB'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ImportResultFromDB'])) {
            if (!empty($map['ImportResultFromDB'])) {
                $model->importResultFromDB = [];
                $n1 = 0;
                foreach ($map['ImportResultFromDB'] as $item1) {
                    $model->importResultFromDB[$n1] = importResultFromDB::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
