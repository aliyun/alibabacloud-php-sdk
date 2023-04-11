<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetMetaTableColumnRequest extends Model
{
    /**
     * @description The globally unique identifier (GUID) of the table in Data Management (DMS).
     *
     *   If the database to which the table belongs is a logical database, you can call the [ListLogicTables](~~141875~~) operation to obtain the value of this parameter.
     *   If the database to which the table belongs is a physical database, you can call the [ListTables](~~141878~~) operation to obtain the value of this parameter.
     *
     * @example IDB_40753****.qntest2.activity_setting
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) operation to obtain the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'tableGuid' => 'TableGuid',
        'tid'       => 'Tid',
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
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMetaTableColumnRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
