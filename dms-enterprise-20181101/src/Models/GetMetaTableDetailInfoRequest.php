<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetMetaTableDetailInfoRequest extends Model
{
    /**
     * @description The GUID of the table in Data Management (DMS).
     *
     * >
     *
     *   You can call the [ListLogicTables](https://help.aliyun.com/document_detail/141875.html) operation with ReturnGuid set to true to query the GUIDs of logical tables in a specific logical database.
     *
     *   You can call the [ListTables](https://help.aliyun.com/document_detail/141878.html) operation with ReturnGuid set to true to query the GUIDs of tables in a specific physical database.
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
     * > To view the ID of the tenant, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see the [View information about the current tenant](https://help.aliyun.com/document_detail/181330.html) section of the Manage DMS tenants topic.
     * @example 123
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
     * @return GetMetaTableDetailInfoRequest
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
