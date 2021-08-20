<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableAddColumnRequest\column;
use AlibabaCloud\Tea\Model;

class UpdateTableAddColumnRequest extends Model
{
    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var column[]
     */
    public $column;
    protected $_name = [
        'tableGuid' => 'TableGuid',
        'column'    => 'Column',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->column) {
            $res['Column'] = [];
            if (null !== $this->column && \is_array($this->column)) {
                $n = 0;
                foreach ($this->column as $item) {
                    $res['Column'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['Column'])) {
            if (!empty($map['Column'])) {
                $model->column = [];
                $n             = 0;
                foreach ($map['Column'] as $item) {
                    $model->column[$n++] = null !== $item ? column::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
