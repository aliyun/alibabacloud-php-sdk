<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateRowPermissionRequest\createRowPermissionCommand;

use AlibabaCloud\Tea\Model;

class tables extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example business_id
     *
     * @var string
     */
    public $columnName;

    /**
     * @description This parameter is required.
     *
     * @example business_id
     *
     * @var string
     */
    public $mappingColumnName;

    /**
     * @description This parameter is required.
     *
     * @example odps.300199897.project_name.table_name
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'columnName' => 'ColumnName',
        'mappingColumnName' => 'MappingColumnName',
        'resourceId' => 'ResourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->mappingColumnName) {
            $res['MappingColumnName'] = $this->mappingColumnName;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['MappingColumnName'])) {
            $model->mappingColumnName = $map['MappingColumnName'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
