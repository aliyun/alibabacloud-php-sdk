<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRulesResponseBody\pagingInfo\dataQualityRules;

use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @description The type of the database to which the table belongs. Valid values:
     *
     *   maxcompute
     *   emr
     *   cdh
     *   hologres
     *   analyticdb_for_postgresql
     *   analyticdb_for_mysql
     *   starrocks
     *
     * @example maxcompute
     *
     * @var string
     */
    public $databaseType;

    /**
     * @description The ID of the table that is limited by the rule in Data Map.
     *
     * @example odps.unit_test.tb_unit_test
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The type of the monitored object. Valid values:
     *
     *   Table
     *
     * @example Table
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'databaseType' => 'DatabaseType',
        'tableGuid' => 'TableGuid',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return target
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
