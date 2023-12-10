<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclResponseBody\data;

use AlibabaCloud\Tea\Model;

class table extends Model
{
    /**
     * @description The operations that were performed on the table.
     *
     * @var string[]
     */
    public $actions;

    /**
     * @description The name of the table.
     *
     * @example tableA
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $schemaName;
    protected $_name = [
        'actions'    => 'actions',
        'name'       => 'name',
        'schemaName' => 'schemaName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['actions'] = $this->actions;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->schemaName) {
            $res['schemaName'] = $this->schemaName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return table
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = $map['actions'];
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['schemaName'])) {
            $model->schemaName = $map['schemaName'];
        }

        return $model;
    }
}
