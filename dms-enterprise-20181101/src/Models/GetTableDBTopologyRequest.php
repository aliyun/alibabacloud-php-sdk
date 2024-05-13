<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetTableDBTopologyRequest extends Model
{
    /**
     * @description The GUID of the table in DMS.
     *
     * >
     *
     *   If the database to which the table belongs is a logical database, you can call the [ListLogicTables](https://help.aliyun.com/document_detail/141875.html) operation to obtain the GUID. The value of the ReturnGuid parameter must be set to true.
     *
     *   If the database to which the table belongs is a physical database, you can call the [ListTables](https://help.aliyun.com/document_detail/141878.html) operation to obtain the GUID. The value of the ReturnGuid parameter must be set to true.
     *
     * This parameter is required.
     * @example IDB_L_9032.db-test.yuyang_test
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The ID of the tenant.
     *
     * > To view the tenant ID, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see [Manage DMS tenants](https://help.aliyun.com/document_detail/181330.html).
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
     * @return GetTableDBTopologyRequest
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
