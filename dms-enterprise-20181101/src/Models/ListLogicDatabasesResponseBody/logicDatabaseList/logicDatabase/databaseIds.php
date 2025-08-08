<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicDatabasesResponseBody\logicDatabaseList\logicDatabase;

use AlibabaCloud\Dara\Model;

class databaseIds extends Model
{
    /**
     * @var int[]
     */
    public $databaseIds;
    protected $_name = [
        'databaseIds' => 'DatabaseIds',
    ];

    public function validate()
    {
        if (\is_array($this->databaseIds)) {
            Model::validateArray($this->databaseIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseIds) {
            if (\is_array($this->databaseIds)) {
                $res['DatabaseIds'] = [];
                $n1 = 0;
                foreach ($this->databaseIds as $item1) {
                    $res['DatabaseIds'][$n1] = $item1;
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
        if (isset($map['DatabaseIds'])) {
            if (!empty($map['DatabaseIds'])) {
                $model->databaseIds = [];
                $n1 = 0;
                foreach ($map['DatabaseIds'] as $item1) {
                    $model->databaseIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
