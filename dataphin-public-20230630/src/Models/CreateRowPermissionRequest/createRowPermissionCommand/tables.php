<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateRowPermissionRequest\createRowPermissionCommand;

use AlibabaCloud\Dara\Model;

class tables extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $mappingColumnName;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'columnName' => 'ColumnName',
        'mappingColumnName' => 'MappingColumnName',
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
