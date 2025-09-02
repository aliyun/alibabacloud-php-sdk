<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreatePermissionApplyOrderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreatePermissionApplyOrderRequest\applyObject\columnMetaList;

class applyObject extends Model
{
    /**
     * @var string
     */
    public $actions;

    /**
     * @var columnMetaList[]
     */
    public $columnMetaList;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'actions' => 'Actions',
        'columnMetaList' => 'ColumnMetaList',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->columnMetaList)) {
            Model::validateArray($this->columnMetaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actions) {
            $res['Actions'] = $this->actions;
        }

        if (null !== $this->columnMetaList) {
            if (\is_array($this->columnMetaList)) {
                $res['ColumnMetaList'] = [];
                $n1 = 0;
                foreach ($this->columnMetaList as $item1) {
                    $res['ColumnMetaList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Actions'])) {
            $model->actions = $map['Actions'];
        }

        if (isset($map['ColumnMetaList'])) {
            if (!empty($map['ColumnMetaList'])) {
                $model->columnMetaList = [];
                $n1 = 0;
                foreach ($map['ColumnMetaList'] as $item1) {
                    $model->columnMetaList[$n1] = columnMetaList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
