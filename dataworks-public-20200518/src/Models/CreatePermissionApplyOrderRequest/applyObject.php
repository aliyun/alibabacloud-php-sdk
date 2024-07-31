<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreatePermissionApplyOrderRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreatePermissionApplyOrderRequest\applyObject\columnMetaList;
use AlibabaCloud\Tea\Model;

class applyObject extends Model
{
    /**
     * @description The permission that you want to request. If you want to request multiple permissions at the same time, separate them with commas (,). You can request only the following permissions: Select, Describe, Drop, Alter, Update, and Download.
     *
     * This parameter is required.
     * @example Select,Describe
     *
     * @var string
     */
    public $actions;

    /**
     * @description The fields on which you want to request permissions.
     *
     * This parameter is required.
     * @var columnMetaList[]
     */
    public $columnMetaList;

    /**
     * @description The name of the object on which you want to request permissions. You can request permissions only on MaxCompute tables. Set this parameter to the name of the table on which you want to request permissions.
     *
     * This parameter is required.
     * @example aTableName
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'actions'        => 'Actions',
        'columnMetaList' => 'ColumnMetaList',
        'name'           => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['Actions'] = $this->actions;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Actions'])) {
            $model->actions = $map['Actions'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
