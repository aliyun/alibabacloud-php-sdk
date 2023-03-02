<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableAddColumnRequest\column;
use AlibabaCloud\Tea\Model;

class UpdateTableAddColumnRequest extends Model
{
    /**
     * @var column[]
     */
    public $column;

    /**
     * @description The globally unique identifier (GUID) of the MaxCompute table. Specify the GUID in the odps.projectName.tableName format.
     *
     * @example odps.engine_name.table_name
     *
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'column'    => 'Column',
        'tableGuid' => 'TableGuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->column) {
            $res['Column'] = [];
            if (null !== $this->column && \is_array($this->column)) {
                $n = 0;
                foreach ($this->column as $item) {
                    $res['Column'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTableAddColumnRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Column'])) {
            if (!empty($map['Column'])) {
                $model->column = [];
                $n             = 0;
                foreach ($map['Column'] as $item) {
                    $model->column[$n++] = null !== $item ? column::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        return $model;
    }
}
