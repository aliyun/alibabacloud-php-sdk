<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicDatabasesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicDatabasesResponseBody\logicDatabaseList\logicDatabase;

class logicDatabaseList extends Model
{
    /**
     * @var logicDatabase[]
     */
    public $logicDatabase;
    protected $_name = [
        'logicDatabase' => 'LogicDatabase',
    ];

    public function validate()
    {
        if (\is_array($this->logicDatabase)) {
            Model::validateArray($this->logicDatabase);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logicDatabase) {
            if (\is_array($this->logicDatabase)) {
                $res['LogicDatabase'] = [];
                $n1 = 0;
                foreach ($this->logicDatabase as $item1) {
                    $res['LogicDatabase'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LogicDatabase'])) {
            if (!empty($map['LogicDatabase'])) {
                $model->logicDatabase = [];
                $n1 = 0;
                foreach ($map['LogicDatabase'] as $item1) {
                    $model->logicDatabase[$n1++] = logicDatabase::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
