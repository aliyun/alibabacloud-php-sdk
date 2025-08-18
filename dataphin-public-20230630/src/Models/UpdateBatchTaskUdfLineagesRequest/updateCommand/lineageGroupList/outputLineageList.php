<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskUdfLineagesRequest\updateCommand\lineageGroupList;

use AlibabaCloud\Dara\Model;

class outputLineageList extends Model
{
    /**
     * @var string[]
     */
    public $columnList;

    /**
     * @var string
     */
    public $env;

    /**
     * @var bool
     */
    public $fullTable;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'columnList' => 'ColumnList',
        'env' => 'Env',
        'fullTable' => 'FullTable',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->columnList)) {
            Model::validateArray($this->columnList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnList) {
            if (\is_array($this->columnList)) {
                $res['ColumnList'] = [];
                $n1 = 0;
                foreach ($this->columnList as $item1) {
                    $res['ColumnList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->fullTable) {
            $res['FullTable'] = $this->fullTable;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['ColumnList'])) {
            if (!empty($map['ColumnList'])) {
                $model->columnList = [];
                $n1 = 0;
                foreach ($map['ColumnList'] as $item1) {
                    $model->columnList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['FullTable'])) {
            $model->fullTable = $map['FullTable'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
