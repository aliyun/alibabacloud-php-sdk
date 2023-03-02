<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaTableThemeLevelRequest extends Model
{
    /**
     * @description The type of the data source. Set the value to odps.
     *
     * @example odps
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The globally unique identifier (GUID) of the table. Specify the GUID in the format of odps.${projectName}.${tableName}.
     *
     * @example odps.project1.name1
     *
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'dataSourceType' => 'DataSourceType',
        'tableGuid'      => 'TableGuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMetaTableThemeLevelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        return $model;
    }
}
