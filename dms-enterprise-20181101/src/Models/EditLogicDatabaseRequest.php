<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class EditLogicDatabaseRequest extends Model
{
    /**
     * @var string
     */
    public $alias;
    /**
     * @var int[]
     */
    public $databaseIds;
    /**
     * @var int
     */
    public $logicDbId;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'alias'       => 'Alias',
        'databaseIds' => 'DatabaseIds',
        'logicDbId'   => 'LogicDbId',
        'tid'         => 'Tid',
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
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->databaseIds) {
            if (\is_array($this->databaseIds)) {
                $res['DatabaseIds'] = [];
                $n1                 = 0;
                foreach ($this->databaseIds as $item1) {
                    $res['DatabaseIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->logicDbId) {
            $res['LogicDbId'] = $this->logicDbId;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['DatabaseIds'])) {
            if (!empty($map['DatabaseIds'])) {
                $model->databaseIds = [];
                $n1                 = 0;
                foreach ($map['DatabaseIds'] as $item1) {
                    $model->databaseIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LogicDbId'])) {
            $model->logicDbId = $map['LogicDbId'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
