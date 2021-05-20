<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreatePermissionApplyOrderRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreatePermissionApplyOrderRequest\applyObject\columnMetaList;
use AlibabaCloud\Tea\Model;

class applyObject extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var columnMetaList[]
     */
    public $columnMetaList;

    /**
     * @var string
     */
    public $actions;
    protected $_name = [
        'name'           => 'Name',
        'columnMetaList' => 'ColumnMetaList',
        'actions'        => 'Actions',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('columnMetaList', $this->columnMetaList, true);
        Model::validateRequired('actions', $this->actions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->columnMetaList) {
            $res['ColumnMetaList'] = [];
            if (null !== $this->columnMetaList && \is_array($this->columnMetaList)) {
                $n = 0;
                foreach ($this->columnMetaList as $item) {
                    $res['ColumnMetaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->actions) {
            $res['Actions'] = $this->actions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ColumnMetaList'])) {
            if (!empty($map['ColumnMetaList'])) {
                $model->columnMetaList = [];
                $n                     = 0;
                foreach ($map['ColumnMetaList'] as $item) {
                    $model->columnMetaList[$n++] = null !== $item ? columnMetaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Actions'])) {
            $model->actions = $map['Actions'];
        }

        return $model;
    }
}
