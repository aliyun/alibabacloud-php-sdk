<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskUdfLineagesRequest\updateCommand\lineageGroupList;

use AlibabaCloud\Tea\Model;

class inputLineageList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $columnList;

    /**
     * @description This parameter is required.
     *
     * @example dev
     *
     * @var string
     */
    public $env;

    /**
     * @description This parameter is required.
     *
     * @var bool
     */
    public $fullTable;

    /**
     * @description This parameter is required.
     *
     * @example t_input
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'columnList' => 'ColumnList',
        'env' => 'Env',
        'fullTable' => 'FullTable',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnList) {
            $res['ColumnList'] = $this->columnList;
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

    /**
     * @param array $map
     *
     * @return inputLineageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnList'])) {
            if (!empty($map['ColumnList'])) {
                $model->columnList = $map['ColumnList'];
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
